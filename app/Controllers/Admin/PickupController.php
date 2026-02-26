<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PickupController extends BaseController
{
public function index()
{
    // Mengarahkan ke file views/pages/pickup.php
    return view('pages/pickup'); 
}
}