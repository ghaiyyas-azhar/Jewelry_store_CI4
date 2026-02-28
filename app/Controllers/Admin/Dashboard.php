<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class Dashboard extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index()
{
    // ================= TOTAL SALES =================
    $totalSales = $this->orderModel
        ->where('status', 'completed')
        ->selectSum('total_price')
        ->first()['total_price'] ?? 0;

    // PENDING PICKUPS
    $pendingPickups = $this->orderModel
        ->where('status', 'approved')
        ->countAllResults();

    // ACTIVE APPOINTMENTS (approved hari ini)
    $activeAppointments = $this->orderModel
        ->where('status', 'approved')
        ->where('DATE(pickup_schedule)', date('Y-m-d'))
        ->countAllResults();

    // ================= NOTIFICATION COUNT =================
    $notifCount = $this->orderModel
        ->where('status', 'approved')
        ->countAllResults();

    // ================= WEEKLY SALES =================
    $weeklyData = [];
    $weeklyLabels = [];

    for ($i = 6; $i >= 0; $i--) {
        $date = date('Y-m-d', strtotime("-$i days"));
        $dayName = date('D', strtotime($date));

        $sum = $this->orderModel
            ->where('status', 'completed')
            ->where('DATE(created_at)', $date)
            ->selectSum('total_price')
            ->first()['total_price'] ?? 0;

        $weeklyData[] = (int)$sum;
        $weeklyLabels[] = $dayName;
    }

    // ================= RECENT ACTIVITY =================
    $recentOrders = $this->orderModel
        ->orderBy('created_at', 'DESC')
        ->limit(4)
        ->findAll();

    // ================= HIGH PRIORITY =================
    $highPriority = $this->orderModel
        ->where('status', 'approved')
        ->orderBy('created_at', 'ASC')
        ->first();



    return view('admin/dashboard', [
        'totalSales'        => $totalSales,
        'pendingPickups'    => $pendingPickups,
        'activeAppointments'=> $activeAppointments,
        'weeklyData'        => json_encode($weeklyData),
        'weeklyLabels'      => json_encode($weeklyLabels),
        'recentOrders'      => $recentOrders,
        'highPriority'      => $highPriority,
    ]);
}

    //MARK COLLECTED
    public function markCollected($id)
{
    $db = \Config\Database::connect();

    $order = $this->orderModel->find($id);

    if (!$order || $order['status'] !== 'approved') {
        return redirect()->back()->with('error', 'Invalid order status');
    }

    // Start transaction
    $db->transStart();

    // Update order
    $this->orderModel->update($id, [
        'status' => 'completed'
    ]);

    // Update pickup appointment
    $db->table('pickup_appointments')
        ->where('order_id', $id)
        ->update([
            'status' => 'picked_up'
        ]);

    $db->transComplete();

    return redirect()->to('/admin')
        ->with('success', 'Order marked as collected');
}
public function logout()
{
    session()->destroy();
    return redirect()->to('/login');
}
}