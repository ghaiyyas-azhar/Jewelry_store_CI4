<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePickupAppointments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'order_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'boutique_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'appointment_date' => [
                'type' => 'DATETIME',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['scheduled','picked_up','cancelled'],
                'default' => 'scheduled'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('order_id', 'orders', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('boutique_id', 'boutiques', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('pickup_appointments');
    }

    public function down()
    {
        $this->forge->dropTable('pickup_appointments');
    }
}