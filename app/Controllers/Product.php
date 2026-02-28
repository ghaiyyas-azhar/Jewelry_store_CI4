<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\BoutiqueModel;

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
            ->where('products.slug', $slug)
            ->first();

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $boutiqueModel = new BoutiqueModel();
        $boutiques = $boutiqueModel->findAll();

        return view('pages/product_detail', [ // pastikan folder huruf kecil jika memang kecil
            'product'   => $product,
            'boutiques' => $boutiques
        ]);
    }
}