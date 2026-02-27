<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\OrderModel;

class ClientController extends BaseController
{
    protected $userModel;
    protected $orderModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->orderModel = new OrderModel();
    }

    public function index()
{
    $clients = $this->userModel
        ->where('role', 'customer')
        ->where('deleted_at', null)
        ->findAll();

    foreach ($clients as &$client) {

        // Ambil hanya order milik user itu
        $orders = $this->orderModel
            ->where('user_id', $client['id'])
            ->findAll();

        $client['total_orders'] = count($orders);

        $totalSpent = 0;

        foreach ($orders as $order) {

            if ($order['status'] === 'completed') {
                $totalSpent += (float)$order['total_price'];
            }
        }

        $client['total_spent'] = $totalSpent;
    }

    return view('admin/clients', [
        'clients' => $clients
    ]);
}

    public function toggleStatus($id)
    {
        $client = $this->userModel->find($id);

        $newStatus = $client['status'] === 'active' ? 'suspended' : 'active';

        $this->userModel->update($id, [
            'status' => $newStatus
        ]);

        return redirect()->to('/admin/clients');
    }

    public function delete($id)
    {
        $this->userModel->update($id, [
            'deleted_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/admin/clients');
    }

    public function edit($id)
{
    $client = $this->userModel->find($id);

    $orders = $this->orderModel
        ->where('user_id', $id)
        ->orderBy('created_at', 'DESC')
        ->limit(5)
        ->findAll();

    $totalSpent = $this->orderModel
        ->where('user_id', $id)
        ->where('status', 'completed')
        ->selectSum('total_price')
        ->first()['total_price'] ?? 0;

    $totalOrders = $this->orderModel
        ->where('user_id', $id)
        ->countAllResults();

    return view('admin/client_edit', [
        'client' => $client,
        'orders' => $orders,
        'totalSpent' => $totalSpent,
        'totalOrders' => $totalOrders
    ]);
}

    public function update($id)
{
    $name  = trim($this->request->getPost('name'));
    $phone = trim($this->request->getPost('phone'));

    // Validasi sederhana
    if (!$name) {
        return redirect()->back()
            ->with('error', 'Full Name is required')
            ->withInput();
    }

    $this->userModel->update($id, [
        'name'  => $name,
        'phone' => $phone
    ]);

    return redirect()->to('/admin/clients')
        ->with('success', 'Client updated successfully');
}
}