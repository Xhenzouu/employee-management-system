<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'first_name'    => 'Juan',
                'middle_name'   => 'Santos',
                'last_name'     => 'Dela Cruz',
                'birthday'      => '1995-03-15',
                'gender'        => 'Male',
                'nationality'   => 'Filipino',
                'height'        => 175,
                'weight'        => 72.50,
                'mobile_number' => '09123456789',
                'province'      => 'Laguna',
                'city'          => 'Santa Cruz',
            ],
            [
                'first_name'    => 'Maria Clara',
                'middle_name'   => 'Reyes',
                'last_name'     => 'Lim',
                'birthday'      => '1998-07-22',
                'gender'        => 'Female',
                'nationality'   => 'Filipino',
                'height'        => 162,
                'weight'        => 55.00,
                'mobile_number' => '09987654321',
                'province'      => 'Metro Manila',
                'city'          => 'Quezon City',
            ],
            [
                'first_name'    => 'Jose',
                'middle_name'   => 'Protacio',
                'last_name'     => 'Rizal',
                'birthday'      => '1861-06-19',
                'gender'        => 'Male',
                'nationality'   => 'Filipino',
                'height'        => 165,
                'weight'        => 60.00,
                'mobile_number' => '09111223344',
                'province'      => 'Laguna',
                'city'          => 'Calamba',
            ],
            [
                'first_name'    => 'Ana',
                'middle_name'   => 'Lopez',
                'last_name'     => 'Garcia',
                'birthday'      => '2000-11-05',
                'gender'        => 'Female',
                'nationality'   => 'Filipino',
                'height'        => 158,
                'weight'        => 48.75,
                'mobile_number' => '09344556677',
                'province'      => 'Cavite',
                'city'          => 'Dasmariñas',
            ],
        ];

        $this->db->table('employees')->insertBatch($data);
    }
}