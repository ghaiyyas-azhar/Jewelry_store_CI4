<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';
    protected $returnType = 'array'; // ⬅️ WAJIB

    protected $allowedFields = [
    'user_id', 
    'product_id',   // tambahkan ini
    'order_code', 
    'total_price', 
    'status', 
    'boutique_id', 
    'requested_date', 
    'requested_time', 
    'created_at'
];

    protected $useTimestamps = false; // ⬅️ penting kalau tidak ada updated_at
}