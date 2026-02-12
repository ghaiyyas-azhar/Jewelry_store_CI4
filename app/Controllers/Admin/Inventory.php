<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Inventory extends BaseController
{
    public function index()
    {
        return view('admin/inventory', [
            'title' => 'Inventory Management'
        ]);
    }
}