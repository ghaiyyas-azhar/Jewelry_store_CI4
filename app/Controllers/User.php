<?php

namespace App\Controllers;

class User extends BaseController
{
    public function profile()
    {
        return view('user/profile');
    }

    public function paymentMethod()
    {
        return view('user/payment_method');
    }
    public function purchaseHistory()
    {
        return view('user/purchase_history');
    }
}