<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function detail($slug)
    {
        $product = $this->productModel
            ->select('products.*, collections.name as collection_name')
            ->join('collections', 'collections.id = products.collection_id')
            ->where('products.slug', $slug) // ini penting
            ->first();

        return view('Pages/product_detail', [
            'product' => $product
        ]);
    }
}
