<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveImageFromCollections extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('products', 'image');
    }

    public function down()
    {
        $this->forge->addColumn('products', [
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
    }
}