<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PickupController extends BaseController
{
    public function index()
    {
        return view('admin/pickups');
    }

    public function approve($id)
    {
        // update status = approved
        return redirect()->back()->with('success', 'Pickup approved.');
    }

    public function decline($id)
    {
        // update status = declined
        return redirect()->back()->with('error', 'Pickup declined.');
    }

    public function markCollected($id)
    {
        // update status = collected
        return redirect()->back()->with('success', 'Marked as collected.');
    }
}
