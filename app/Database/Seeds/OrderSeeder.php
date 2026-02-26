<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orderData = [
            [
                'user_id' => 2,
                'order_code' => 'ORD-001',
                'total_price' => 32400,
                'status' => 'pending',
                'pickup_schedule' => date('Y-m-d H:i:s', strtotime('+2 days')),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('orders')->insertBatch($orderData);

        $orderItems = [
            [
                'order_id' => 1,
                'product_id' => 1,
                'qty' => 1,
                'price' => 32400
            ]
        ];

        $this->db->table('order_items')->insertBatch($orderItems);
    }
}