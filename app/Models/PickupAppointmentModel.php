<?php

namespace App\Models;

use CodeIgniter\Model;

class PickupAppointmentModel extends Model
{
    protected $table = 'pickup_appointments';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'order_id',
        'users_id',
        'boutique_id',
        'appointment_date',
        'appointment_time',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}