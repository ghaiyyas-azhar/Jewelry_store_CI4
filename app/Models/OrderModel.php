<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'user_id',
        'order_code',
        'total_price',
        'status',
        'pickup_schedule',
        'created_at'
    ];
}