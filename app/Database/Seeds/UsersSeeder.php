<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'    => 'admin',
                'email'       => 'admin@example.com',
                'role'        => 'admin',
                'password'    => password_hash('admin123', PASSWORD_DEFAULT),
                'created_at'  => date('Y-m-d H:i:s'),
            ]
        ];

        // Use upsert to avoid duplicate error if seeder is run multiple times
        $this->db->table('users')->upsertBatch($data);
    }
}