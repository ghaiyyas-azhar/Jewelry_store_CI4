<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Cart extends BaseController
{
public function add($id)
{
    if(!session()->get('isLoggedIn')){
        return redirect()->to('/login')
            ->with('error','You must login first.');
    }

    // add to cart logic
}

}
