<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Collection extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->productModel
            ->select('products.*, collections.name as collection_name')
            ->join('collections', 'collections.id = products.collection_id', 'left')
            ->where('products.is_active', 1)
            ->findAll();

        return view('pages/collections', $data);
    }
}