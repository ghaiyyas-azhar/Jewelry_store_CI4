<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CollectionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Celestial Light',
                'slug' => 'celestial-light',
                'description' => 'Luxury diamond pieces'
            ],
            [
                'name' => 'Emerald Dreams',
                'slug' => 'emerald-dreams',
                'description' => 'Emerald themed jewelry'
            ],
            [
                'name' => 'Gilded Age',
                'slug' => 'gilded-age',
                'description' => 'Solid gold luxury jewelry'
            ],
            [
                'name' => 'Heirloom Radiance',
                'slug' => 'heirloom-radiance',
                'description' => 'Classic heritage jewelry'
            ],
            [
                'name' => 'Midnight Diamond',
                'slug' => 'midnight-diamond',
                'description' => 'Dark sapphire & diamond jewelry'
            ],
        ];

        $this->db->table('collections')->insertBatch($data);
    }
}