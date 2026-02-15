<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('Pages/products'); // halaman list
    }

    public function detail($slug)
    {
        return view('Pages/product_detail', [
            'slug' => $slug
        ]);
    }
}
