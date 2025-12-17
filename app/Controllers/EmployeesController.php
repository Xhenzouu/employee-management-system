<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmployeeModel;

class EmployeesController extends Controller
{
    public function index()
    {
        helper('form');

        $model = new EmployeeModel();

        // Pagination config
        $perPage = 15;
        $page = $this->request->getVar('page') ?? 1;

        $employees = $model->paginate($perPage);
        $pager = $model->pager;

        // Build full name for display
        foreach ($employees as &$employee) {
            $middle = $employee['middle_name'] ? $employee['middle_name'] . ' ' : '';
            $employee['full_name'] = trim($employee['first_name'] . ' ' . $middle . $employee['last_name']);
        }

        $data = [
            'employees' => $employees,
            'pager'     => $pager,
        ];

        return view('employees/index', $data);
    }

    public function create()
    {
        helper('form');

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'first_name'     => 'required|min_length[2]',
                'last_name'      => 'required|min_length[2]',
                'gender'         => 'required|in_list[Male,Female,Other]',
                'nationality'    => 'required|min_length[3]',
                'height'         => 'required|integer|greater_than_equal_to[100]|less_than_equal_to[250]',
                'weight'         => 'required|decimal|greater_than_equal_to[30]|less_than_equal_to[300]',
                'mobile_number'  => 'required|regex_match[/^09\d{9}$/]',  // Philippine format: starts with 09, 11 digits total
                'province'       => 'required|min_length[3]',
                'city'           => 'required|min_length[3]',
                'middle_name'    => 'permit_empty',
                'birthday'       => 'permit_empty|valid_date',
            ];

            if ($this->validate($rules)) {
                $model = new EmployeeModel();
                $model->insert([
                    'first_name'  => $this->request->getPost('first_name'),
                    'middle_name' => $this->request->getPost('middle_name'),
                    'last_name'   => $this->request->getPost('last_name'),
                    'birthday'    => $this->request->getPost('birthday') ?: null,
                ]);

                return redirect()->to('/employees')->with('success', 'Employee added successfully!');
            }

            // Validation failed → return to form with errors and old input
            return view('employees/create', [
                'validation' => $this->validator
            ]);
        }

        return view('employees/create');
    }

    public function edit($id = null)
    {
        $model = new EmployeeModel();

        helper('form');

        $employee = $model->find($id);

        if (!$employee) {
            return redirect()->to('/employees')->with('error', 'Employee not found.');
        }

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'first_name' => 'required|min_length[2]',
                'last_name'  => 'required|min_length[2]',
                'middle_name' => 'permit_empty',
                'birthday'    => 'permit_empty|valid_date',
            ];

            if ($this->validate($rules)) {
                $model->update($id, [
                    'first_name'  => $this->request->getPost('first_name'),
                    'middle_name' => $this->request->getPost('middle_name'),
                    'last_name'   => $this->request->getPost('last_name'),
                    'birthday'    => $this->request->getPost('birthday') ?: null,
                ]);

                return redirect()->to('/employees')->with('success', 'Employee updated successfully!');
            }

            // Validation failed → return to edit form with errors and old input
            return view('employees/edit', [
                'employee'   => array_merge($employee, $this->request->getPost()),
                'validation' => $this->validator
            ]);
        }

        return view('employees/edit', ['employee' => $employee]);
    }

    public function delete($id = null)
    {
        $model = new EmployeeModel();
        $model->delete($id);

        return redirect()->to('/employees')->with('success', 'Employee deleted successfully!');
    }
}