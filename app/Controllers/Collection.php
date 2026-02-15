<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Collection extends Controller
{
    public function index()
    {
        return view('Pages/collections');
    }
}