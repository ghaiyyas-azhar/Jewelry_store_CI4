<?php

namespace App\Controllers;

class Success extends BaseController
{
    public function index()
    {
        return view('pages/success', [
            'title' => 'Order Confirmation'
        ]);
    }
}
