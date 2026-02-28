<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PickupAppointmentModel;

class PickupController extends ResourceController
{
    protected $format = 'json';
    protected $pickupModel;

    public function __construct()
    {
        $this->pickupModel = new PickupAppointmentModel();
    }

    // ===============================
    // GET ALL APPOINTMENTS
    // ===============================
    public function index()
    {
        $data = $this->pickupModel
            ->select('pickup_appointments.*, orders.order_code, boutiques.name as boutique_name')
            ->join('orders', 'orders.id = pickup_appointments.order_id', 'left')
            ->join('boutiques', 'boutiques.id = pickup_appointments.boutique_id', 'left')
            ->findAll();

        return $this->respond($data);
    }

    // ===============================
    // GET DETAIL APPOINTMENT
    // ===============================
    public function show($id = null)
    {
        $appointment = $this->pickupModel
            ->select('pickup_appointments.*, orders.order_code, boutiques.name as boutique_name')
            ->join('orders', 'orders.id = pickup_appointments.order_id', 'left')
            ->join('boutiques', 'boutiques.id = pickup_appointments.boutique_id', 'left')
            ->where('pickup_appointments.id', $id)
            ->first();

        if (!$appointment) {
            return $this->failNotFound('Appointment not found');
        }

        return $this->respond($appointment);
    }

    // ===============================
    // UPDATE STATUS (picked_up / cancelled)
    // ===============================
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        $appointment = $this->pickupModel->find($id);

        if (!$appointment) {
            return $this->failNotFound('Appointment not found');
        }

        if (!isset($data['status'])) {
            return $this->failValidationErrors('Status is required');
        }

        $this->pickupModel->update($id, [
            'status' => $data['status']
        ]);

        return $this->respond([
            'message' => 'Appointment updated'
        ]);
    }
}