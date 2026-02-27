<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\PickupAppointmentModel;

class Pickup extends BaseController
{
    public function index($slug = null)
    {
        if (!$slug) {
            return redirect()->to('/collections');
        }

        $productModel = new ProductModel();

        $product = $productModel
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

    // ✅ Tambahkan method confirm untuk handle form submit
  public function confirm()
{
    $data = [
        'users_id'         => $this->request->getPost('users_id'),
        'boutique_id'      => $this->request->getPost('boutique_id'),
        'appointment_date' => $this->request->getPost('appointment_date'),
        'appointment_time' => $this->request->getPost('appointment_time'),
        'status'           => 'pending'
    ];

    $db = \Config\Database::connect();

    if ($db->table('pickup_appointments')->insert($data)) {
        return redirect()->to('/success');
    } else {
        // Jika gagal insert
        return redirect()->back()->with('error', 'Failed to create appointment.');
    }
}
}