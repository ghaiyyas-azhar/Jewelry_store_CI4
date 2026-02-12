<?php

namespace App\Controllers;

class Pickup extends BaseController
{
    public function index()
    {
        return view('pages/pickup', [
            'title' => 'Pickup Scheduler'
        ]);
    }
}