<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('pages/product', [
            'title' => 'Product Detail'
        ]);
    }
}