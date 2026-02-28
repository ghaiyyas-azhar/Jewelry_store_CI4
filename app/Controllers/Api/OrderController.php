<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\OrderModel;
use App\Models\OrderItemModel;
use App\Models\ProductModel;
use App\Models\PickupAppointmentModel;
use App\Models\UserModel;
use App\Models\BoutiqueModel;

class OrderController extends ResourceController
{
    protected $format = 'json';

    protected $orderModel;
    protected $orderItemModel;
    protected $productModel;
    protected $pickupModel;

    public function __construct()
    {
        $this->orderModel      = new OrderModel();
        $this->orderItemModel  = new OrderItemModel();
        $this->productModel    = new ProductModel();
        $this->pickupModel     = new PickupAppointmentModel();
    }

    // ===============================
    // GET ALL ORDERS
    // ===============================
    public function index()
{
    $orders = $this->orderModel
        ->select('orders.*, users.name as user_name, boutiques.name as boutique_name')
        ->join('users', 'users.id = orders.user_id', 'left')
        ->join('boutiques', 'boutiques.id = orders.boutique_id', 'left')
        ->findAll();

    return $this->respond($orders);
}

    // ===============================
    // GET DETAIL ORDER
    // ===============================
    public function show($id = null)
    {
        $order = $this->orderModel->find($id);

        if (!$order) {
            return $this->failNotFound('Order not found');
        }

        $items = $this->orderItemModel
            ->select('order_items.*, products.name as product_name')
            ->join('products', 'products.id = order_items.product_id')
            ->where('order_id', $id)
            ->findAll();

        $order['items'] = $items;

        return $this->respond($order);
    }

    // ===============================
    // CREATE ORDER (FULL PRO)
    // ===============================
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!isset($data['user_id'], $data['boutique_id'], $data['items'])) {
            return $this->failValidationErrors('Invalid payload');
        }

        $totalPrice = 0;

        foreach ($data['items'] as $item) {
            $product = $this->productModel->find($item['product_id']);

            if (!$product) {
                return $this->failNotFound('Product not found');
            }

            if ($product['stock'] < $item['qty']) {
                return $this->failValidationErrors('Stock not enough for product: ' . $product['name']);
            }

            $totalPrice += $product['price'] * $item['qty'];
        }

        $orderData = [
            'user_id'        => $data['user_id'],
            'order_code'     => 'ORD-' . time(),
            'total_price'    => $totalPrice,
            'status'         => 'pending',
            'requested_date' => $data['requested_date'] ?? null,
            'requested_time' => $data['requested_time'] ?? null,
            'boutique_id'    => $data['boutique_id'],
            'created_at'     => date('Y-m-d H:i:s')
        ];

        $this->orderModel->insert($orderData);
        $orderId = $this->orderModel->getInsertID();

        foreach ($data['items'] as $item) {
            $product = $this->productModel->find($item['product_id']);

            $this->orderItemModel->insert([
                'order_id'   => $orderId,
                'product_id' => $item['product_id'],
                'qty'        => $item['qty'],
                'price'      => $product['price']
            ]);

            // UPDATE STOCK
            $this->productModel->update($item['product_id'], [
                'stock' => $product['stock'] - $item['qty']
            ]);
        }

        return $this->respondCreated([
            'message' => 'Order created successfully',
            'order_id' => $orderId
        ]);
    }

    // ===============================
    // UPDATE STATUS
    // ===============================
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        $order = $this->orderModel->find($id);

        if (!$order) {
            return $this->failNotFound('Order not found');
        }

        $this->orderModel->update($id, [
            'status' => $data['status'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        // AUTO CREATE PICKUP APPOINTMENT IF APPROVED
        if ($data['status'] === 'approved') {
            $this->pickupModel->insert([
                'order_id'       => $id,
                'boutique_id'    => $order['boutique_id'],
                'appointment_date' => $order['requested_date'],
                'appointment_time' => $order['requested_time'],
                'status'         => 'scheduled',
                'created_at'     => date('Y-m-d H:i:s')
            ]);
        }

        return $this->respond([
            'message' => 'Order updated'
        ]);
    }

    // ===============================
    // DELETE ORDER
    // ===============================
    public function delete($id = null)
    {
        if (!$this->orderModel->find($id)) {
            return $this->failNotFound('Order not found');
        }

        $this->orderItemModel->where('order_id', $id)->delete();
        $this->orderModel->delete($id);

        return $this->respondDeleted([
            'message' => 'Order deleted'
        ]);
    }
}