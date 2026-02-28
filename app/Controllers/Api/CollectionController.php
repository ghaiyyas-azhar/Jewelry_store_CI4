<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\CollectionModel;

class CollectionController extends ResourceController
{
    protected $format = 'json';
    protected $collectionModel;

    public function __construct()
    {
        $this->collectionModel = new CollectionModel();
    }

    // ============================
    // GET ALL COLLECTIONS
    // ============================
    public function index()
    {
        $collections = $this->collectionModel->findAll();
        return $this->respond($collections);
    }

    // ============================
    // GET DETAIL COLLECTION
    // ============================
    public function show($id = null)
    {
        $collection = $this->collectionModel->find($id);

        if (!$collection) {
            return $this->failNotFound('Collection not found');
        }

        return $this->respond($collection);
    }

    // ============================
    // CREATE COLLECTION
    // ============================
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!$data) {
            return $this->failValidationErrors('Invalid payload');
        }

        $this->collectionModel->insert($data);

        return $this->respondCreated([
            'message' => 'Collection created',
            'id' => $this->collectionModel->getInsertID()
        ]);
    }

    // ============================
    // UPDATE COLLECTION
    // ============================
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        $collection = $this->collectionModel->find($id);

        if (!$collection) {
            return $this->failNotFound('Collection not found');
        }

        $this->collectionModel->update($id, $data);

        return $this->respond([
            'message' => 'Collection updated'
        ]);
    }

    // ============================
    // DELETE COLLECTION
    // ============================
    public function delete($id = null)
    {
        $collection = $this->collectionModel->find($id);

        if (!$collection) {
            return $this->failNotFound('Collection not found');
        }

        $this->collectionModel->delete($id);

        return $this->respondDeleted([
            'message' => 'Collection deleted'
        ]);
    }
}