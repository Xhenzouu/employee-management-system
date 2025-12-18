# Employee Management System

A secure and responsive **Employee Management System** built with **CodeIgniter 4** for the Intermediate Programming (CodeIgniter) final project.

This system demonstrates:
- User authentication (login/logout with confirmation modal)
- Full CRUD operations on employee records
- Input validation
- MySQL database integration
- Dashboard with workforce metrics (total employees + gender distribution doughnut chart)

## Default Login Credentials

- **Username**: `admin`
- **Password**: `password`

## Quick Setup Instructions (Recommended – No Manual SQL Import Needed)

Follow these steps to run the project on XAMPP:

1. Copy the entire project folder to your XAMPP `htdocs` directory  
   Example: `C:\xampp\htdocs\employee-management-system`

2. Open a terminal (Command Prompt or PowerShell) inside the project folder

3. Run this single command to automatically create the database tables and insert the admin user + sample employees:

C:\xampp\php\php.exe spark migrate


4. Open your browser and go to:  
http://localhost/employee-management-system/auth/login

5. Log in with:  
- Username: `admin`  
- Password: `password`

That's it! The system is ready to use with sample data and a populated dashboard.

## Alternative Setup (Manual Import – Backup Option Provided)

I have also included the exported database file (`employees_db.sql`) in this submission for convenience.

If you prefer not to run the migration command:

1. Create a new database in phpMyAdmin (e.g., `employees_db`)
2. Go to the **Import** tab and upload the provided `employees_db.sql` file
3. (Optional) Update the `.env` file with your database name if needed
4. Access the same URL: http://localhost/employee-management-system/auth/login

## Features

- Secure session-based authentication with route protection
- Full CRUD operations (Create, Read, Update, Delete) for employees
- Server-side form validation with error feedback
- Responsive dark-themed dashboard using Bootstrap 5
- Visual gender distribution using interactive doughnut chart (Chart.js)
- Confirmation modals for logout and delete actions
- Sample employee data pre-loaded for demonstration

## Tech Stack

- CodeIgniter 4 (MVC framework)
- PHP 8+
- MySQL
- Bootstrap 5 + Bootstrap Icons
- Chart.js for dashboard charts

## Project Structure Highlights

- `app/Controllers/` – AuthController, EmployeesController
- `app/Models/` – UserModel, EmployeeModel
- `app/Views/employees/` – Dashboard, forms, and employee list
- `app/Database/Migrations/` – Automatic table creation
- `app/Database/Seeds/` – Admin user and sample data

Thank you for reviewing this project!  
Submitted by: [Your Full Name]  
Date: December 18, 2025
