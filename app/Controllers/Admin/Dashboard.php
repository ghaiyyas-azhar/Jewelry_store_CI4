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

        // ================= PENDING PICKUPS =================
        $pendingPickups = $this->orderModel
            ->where('status', 'approved')
            ->countAllResults();

        // ================= ACTIVE APPOINTMENTS =================
        $activeAppointments = $this->orderModel
            ->where('status', 'approved')
            ->where('DATE(pickup_schedule)', date('Y-m-d'))
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
            'highPriority'      => $highPriority
        ]);
    }

    public function markCollected($id)
    {
        $this->orderModel->update($id, [
            'status' => 'completed'
        ]);

        return redirect()->to('/admin');
    }
}