<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\ProductModel;

class Success extends BaseController
{
    public function index($orderId = null)
    {
        if (!$orderId) {
            return redirect()->to('/collections');
        }

        $orderModel   = new OrderModel();
        $productModel = new ProductModel();

        $order = $orderModel->find($orderId);

        if (!$order) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // 🔥 Ambil product berdasarkan product_id
        $product = $productModel->find($order['product_id']);

        return view('pages/success', [
            'order'   => $order,
            'product' => $product
        ]);
    }
}