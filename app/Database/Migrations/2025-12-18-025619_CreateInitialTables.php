<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInitialTables extends Migration
{
    public function up()
    {
        // ====================
        // Create 'users' table
        // ====================
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unique'     => true,
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'employee',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');

        // ======================
        // Create 'employees' table
        // ======================
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'middle_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'birthday' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'gender' => [
                'type'       => 'ENUM',
                'constraint' => ['Male', 'Female', 'Other'],
                'default'    => 'Male',
            ],
            'nationality' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'height' => [
                'type' => 'INT',
                'null' => true,
            ],
            'weight' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'null' => true,
            ],
            'mobile_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],
            'province' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('employees');

        // ================================
        // Automatically seed initial data
        // ================================
        $seeder = \Config\Database::seeder();
        $seeder->call('UsersSeeder');      // Creates admin user
        $seeder->call('EmployeesSeeder');  // Creates sample employees
    }

    public function down()
    {
        // Drop tables in reverse order (if needed)
        $this->forge->dropTable('employees');
        $this->forge->dropTable('users');
    }
}