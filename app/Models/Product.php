<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\BoutiqueModel;

class Product extends BaseController
{
    public function detail($slug)
    {
        $productModel  = new ProductModel();
        $boutiqueModel = new BoutiqueModel();

        // Ambil product berdasarkan slug
        $product = $productModel
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->first();

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Ambil semua boutique
        $boutiques = $boutiqueModel->findAll();

        return view('pages/product_detail', [
            'product'   => $product,
            'boutiques' => $boutiques
        ]);
    }
}