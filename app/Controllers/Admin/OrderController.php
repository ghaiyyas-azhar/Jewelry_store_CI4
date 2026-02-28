<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\PickupAppointmentModel;

class OrderController extends BaseController
{
    protected $orderModel;
    protected $pickupModel;

    public function __construct()
    {
        $this->orderModel  = new OrderModel();
        $this->pickupModel = new PickupAppointmentModel();
    }

    /**
     * Fungsi untuk menyetujui order sekaligus membuat jadwal pickup
     */
    public function approveOrder($orderId)
    {
        // 1. Cari data order berdasarkan ID
        $order = $this->orderModel->find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Order tidak ditemukan.');
        }

        // Jalankan Database Transaction agar aman
        $db = \Config\Database::connect();
        $db->transStart();

        try {
            // 2. Siapkan data untuk tabel pickup_appointments
            // Diambil dari kolom "requested" yang sudah kita simpan di tabel orders
            $pickupData = [
                'order_id'         => $order['id'],
                'users_id'         => $order['user_id'], // Sesuaikan jika nama kolomnya user_id
                'boutique_id'      => $order['boutique_id'],
                'appointment_date' => $order['requested_date'],
                'appointment_time' => $order['requested_time'],
                'status'           => 'scheduled',
                'created_at'       => date('Y-m-d H:i:s')
            ];

            // 3. Masukkan ke tabel pickup_appointments
            $this->pickupModel->insert($pickupData);

            // 4. Update status order menjadi 'confirmed' atau 'approved'
            $this->orderModel->update($orderId, [
                'status' => 'confirmed'
            ]);

            $db->transComplete();

            if ($db->transStatus() === false) {
                return redirect()->back()->with('error', 'Gagal memproses konfirmasi.');
            }

            return redirect()->back()->with('success', 'Order berhasil dikonfirmasi dan jadwal telah dibuat.');

        } catch (\Exception $e) {
            $db->transRollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}