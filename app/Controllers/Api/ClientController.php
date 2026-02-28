<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class ClientController extends ResourceController
{
    protected $format = 'json';
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // ============================
    // GET ALL CLIENTS
    // ============================
    public function index()
    {
        $clients = $this->userModel
            ->where('role', 'customer')
            ->findAll();

        return $this->respond($clients);
    }

    // ============================
    // GET CLIENT DETAIL
    // ============================
    public function show($id = null)
    {
        $client = $this->userModel
            ->where('role', 'customer')
            ->find($id);

        if (!$client) {
            return $this->failNotFound('Client not found');
        }

        return $this->respond($client);
    }

    // ============================
    // CREATE CLIENT
    // ============================
    public function create()
{
    $data = $this->request->getJSON(true);

    if (!$data) {
        return $this->failValidationErrors('Invalid payload');
    }

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    $data['role'] = 'customer';
    $data['status'] = 'active';

    $this->userModel->insert($data);

    return $this->respondCreated([
        'message' => 'Client created',
        'id' => $this->userModel->getInsertID()
    ]);
}

    // ============================
    // UPDATE CLIENT
    // ============================
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        $client = $this->userModel->find($id);

        if (!$client) {
            return $this->failNotFound('Client not found');
        }

        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        $this->userModel->update($id, $data);

        return $this->respond([
            'message' => 'Client updated'
        ]);
    }

    // ============================
    // DELETE CLIENT
    // ============================
    public function delete($id = null)
    {
        $client = $this->userModel->find($id);

        if (!$client) {
            return $this->failNotFound('Client not found');
        }

        $this->userModel->delete($id);

        return $this->respondDeleted([
            'message' => 'Client deleted'
        ]);
    }
}