<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Role extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Administrator', 'description' => 'Administrator Sistem', 'slug' => 'administrator'],
            ['name' => 'mentor', 'description' => 'Ustadz/Ustadzah Halaqoh', 'slug' => 'mentor'],
            ['name' => 'member', 'description' => 'Peserta liqo', 'slug' => 'member'],
        ];

        // Insert data to roles table
        $this->db->table('roles')->insertBatch($data);
    }
}
