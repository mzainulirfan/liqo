<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Role extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Admin Sistem', 'description' => 'Administrator Sistem', 'slug' => 'admin-sistem'],
            ['name' => 'Pengurus', 'description' => 'Pengurus Halaqoh', 'slug' => 'pengurus'],
            ['name' => 'Ustadz/Ustadzah', 'description' => 'Ustadz/Ustadzah Halaqoh', 'slug' => 'ustadz'],
            ['name' => 'Peserta', 'description' => 'Peserta Halaqoh', 'slug' => 'peserta'],
        ];

        // Insert data to roles table
        $this->db->table('roles')->insertBatch($data);
    }
}
