<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\OrderModel;
use App\Models\PickupAppointmentModel;

class Pickup extends BaseController
{
    protected $productModel;
    protected $orderModel;
    protected $pickupModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->orderModel   = new OrderModel();
        $this->pickupModel  = new PickupAppointmentModel();
    }

    public function index($slug = null)
    {
        if (!$slug) {
            return redirect()->to('/collections');
        }

        $product = $this->productModel
            ->select('products.*, collections.name as collection_name')
            ->join('collections', 'collections.id = products.collection_id')
            ->where('products.slug', $slug)
            ->first();

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('pages/pickup', [
            'product' => $product
        ]);
    }

    public function confirm()
    {
        $userId = session()->get('user_id');

        if (!$userId) {
            return redirect()->back()->with('error', 'Please login first.');
        }

        $orderModel = new OrderModel();

        // Siapkan data order beserta rencana janji temunya (requested)
        $orderData = [
            'user_id'        => $userId,
            'order_code'     => 'ORD-' . time(),
            'total_price'    => $this->request->getPost('total_price'),
            'status'         => 'pending',
            'boutique_id'    => $this->request->getPost('boutique_id'),
            'requested_date' => $this->request->getPost('appointment_date'), // Dari hidden input view
            'requested_time' => $this->request->getPost('appointment_time'), // Dari hidden input view
            'created_at'     => date('Y-m-d H:i:s')
        ];

        // Simpan ke tabel orders
        if ($orderModel->insert($orderData)) {
            // Berhasil: Langsung ke halaman sukses tanpa membuat pickup_appointment dulu
            return redirect()->to('/success');
        } else {
            // Jika gagal simpan order, balik ke form
            return redirect()->back()->with('error', 'Gagal memproses pesanan.');
        }
    }
}