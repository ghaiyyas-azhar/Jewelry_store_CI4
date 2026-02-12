<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Nahecididi | Luxury Jewelry & Private Viewings'
        ];

        return view('home', $data);
    }

    // Handle Boutique Search
    public function searchBoutique()
    {
        $keyword = $this->request->getPost('location');

        if (!$keyword) {
            return redirect()->back()->with('error', 'Please enter a location.');
        }

        return redirect()->to('/')->with('success', 'Searching boutique near: ' . $keyword);
    }

    // Handle Subscribe
    public function subscribe()
    {
        $email = $this->request->getPost('email');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Invalid email address.');
        }

        return redirect()->to('/')->with('success', 'Thank you for subscribing!');
    }
}
