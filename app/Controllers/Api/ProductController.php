<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;

class ProductController extends ResourceController
{
    protected $format = 'json';
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    // ============================
    // GET ALL PRODUCTS
    // ============================
    public function index()
    {
        $products = $this->productModel
            ->select('products.*, collections.name as collection_name')
            ->join('collections', 'collections.id = products.collection_id', 'left')
            ->findAll();

        return $this->respond($products);
    }

    // ============================
    // GET PRODUCT DETAIL
    // ============================
    public function show($id = null)
    {
        $product = $this->productModel
            ->select('products.*, collections.name as collection_name')
            ->join('collections', 'collections.id = products.collection_id', 'left')
            ->where('products.id', $id)
            ->first();

        if (!$product) {
            return $this->failNotFound('Product not found');
        }

        return $this->respond($product);
    }

    // ============================
    // CREATE PRODUCT
    // ============================
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!$data) {
            return $this->failValidationErrors('Invalid payload');
        }

        $this->productModel->insert($data);

        return $this->respondCreated([
            'message' => 'Product created',
            'id' => $this->productModel->getInsertID()
        ]);
    }

    // ============================
    // UPDATE PRODUCT
    // ============================
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        $product = $this->productModel->find($id);

        if (!$product) {
            return $this->failNotFound('Product not found');
        }

        $this->productModel->update($id, $data);

        return $this->respond([
            'message' => 'Product updated'
        ]);
    }

    // ============================
    // DELETE PRODUCT
    // ============================
    public function delete($id = null)
    {
        $product = $this->productModel->find($id);

        if (!$product) {
            return $this->failNotFound('Product not found');
        }

        $this->productModel->delete($id);

        return $this->respondDeleted([
            'message' => 'Product deleted'
        ]);
    }
}