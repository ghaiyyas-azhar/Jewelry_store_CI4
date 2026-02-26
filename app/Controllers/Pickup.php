<?php

namespace App\Controllers;

use App\Models\ProductModel;

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
}