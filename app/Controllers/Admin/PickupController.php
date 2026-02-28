<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class PickupController extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index()
{
    $db = \Config\Database::connect();

    $appointments = $db->table('pickup_appointments pa')
        ->select('pa.*, o.order_code, o.total_price, o.status, u.name as customer_name, b.name as boutique_name')
        ->join('orders o', 'o.id = pa.order_id')
        ->join('users u', 'u.id = o.user_id')
        ->join('boutiques b', 'b.id = pa.boutique_id')
        ->where('o.status', 'approved')
        ->orderBy('pa.appointment_date', 'ASC')
        ->get()
        ->getResultArray();

    return view('admin/appointments/index', [
        'appointments' => $appointments,
    ]);
}

    public function markCollected($appointmentId)
{
    $db = \Config\Database::connect();
    $orderModel = new \App\Models\OrderModel();

    // Ambil appointment berdasarkan ID
    $appointment = $db->table('pickup_appointments')
        ->where('id', $appointmentId)
        ->get()
        ->getRowArray();

    if (!$appointment) {
        return redirect()->back()->with('error', 'Appointment not found');
    }

    $db->transStart();

    // 🔥 1. Update ORDER jadi completed
    $orderModel->update($appointment['order_id'], [
        'status' => 'completed'
    ]);

    // 🔥 2. Update appointment jadi picked_up
    $db->table('pickup_appointments')
        ->where('id', $appointmentId)
        ->update([
            'status' => 'picked_up'
        ]);

    $db->transComplete();

    return redirect()->to('/admin/appointments')
        ->with('success', 'Order marked as collected');
}
}