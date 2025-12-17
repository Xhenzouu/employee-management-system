<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'first_name',
    'middle_name',
    'last_name',
    'birthday',
    'gender',
    'nationality',
    'height',
    'weight',
    'mobile_number',
    'province',
    'city'
    ];
}