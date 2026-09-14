# Employee Management System 🧑‍💼📊

A web-based system for managing employee records, built on **CodeIgniter 4 (PHP)**. It provides authentication, full employee CRUD, a metrics-driven dashboard, and a dark theme UI.

Designed for real-world HR/admin use, this system prioritizes:

- 🔐 Secure, filtered access to employee data
- 🗂️ Clean CRUD management of employee records
- 📊 At-a-glance metrics on the dashboard
- 🌙 A comfortable dark theme UI

Current production version: **v1**

🔗 **Live Demo:** _Not deployed yet — currently runs locally._

## 🌍 Project Overview

The Employee Management System gives admins a central place to log in, view key employee metrics on the home dashboard, and manage employee records — replacing manual, spreadsheet-based tracking with a proper CRUD-backed web app.

## 🧩 Core Features

- 🔐 **Authentication** (`AuthController`, `AuthFilter`) — login-protected access
- 🏠 **Dashboard with metrics** (`Home.php`) — overview stats on employees
- 🧑‍💼 **Employee management** (`EmployeesController`, `EmployeeModel`) — full CRUD for employee records
- 👤 **User accounts** (`UserModel`) for system login
- 🌙 **Dark theme UI**
- 🗄️ **Database schema included** — `employees_db.sql` for quick local setup

## 🔄 Core Flow

```
Login (AuthController, protected by AuthFilter)
        ↓
   Dashboard / Metrics (Home.php)
        ↓
   Employees List (EmployeesController → EmployeeModel)
        ↓
   Create / Edit / Delete Employee Records
```

## 📋 Database Schema Reference

Schema is provided directly as `employees_db.sql`, alongside CodeIgniter migrations/seeds (`app/Database`). Core entities, based on the app's models:

| Model | Description |
|-------|--------------|
| `UserModel` | System accounts used for login |
| `EmployeeModel` | Employee records managed through the CRUD screens |

## 🧱 System Architecture

```
Browser
   ↓
CodeIgniter 4 Router → AuthFilter
   ↓
Controllers (Home, Auth, Employees)
   ↓
Models (User, Employee) → Database (employees_db.sql)
   ↓
Views (auth, employees) — Dark theme UI
```

## 📁 Project Structure

```
employee-management-system/
├── app/                    # Application code
│   ├── Config/             # Framework & app configuration
│   ├── Controllers/        # Auth, Employees, Home
│   ├── Database/           # Migrations and seeds
│   ├── Filters/            # AuthFilter
│   ├── Models/             # EmployeeModel, UserModel
│   ├── Views/              # auth, employees, errors
│   └── Helpers/ Language/ Libraries/ ThirdParty/
├── public/                 # Web root (index.php entry, assets)
├── system/                 # CodeIgniter 4 framework core
├── tests/                  # Test suite
├── writable/               # Cache, logs, sessions, uploads, debugbar
├── employees_db.sql        # Database schema/dump
├── .env / env               # Environment configuration
├── composer.json
└── spark                   # CodeIgniter CLI tool
```

## 🛠️ Tech Stack

- **Framework:** CodeIgniter 4 (PHP)
- **Architecture:** MVC (Controllers, Models, Views)
- **Access Control:** CodeIgniter Filters (`AuthFilter`)
- **Database:** MySQL (`employees_db.sql`), managed via CodeIgniter Migrations & Seeds
- **UI:** Dark theme
- **Dependency Management:** Composer
- **CLI Tooling:** CodeIgniter Spark
- **Version Control:** Git, GitHub

## ▶️ Running Locally

1. Clone the repo
2. `cd employee-management-system`
3. Install dependencies: `composer install`
4. Create a database and import `employees_db.sql`
5. Copy `env` to `.env` and configure your database credentials and base URL
6. (Optional) Run any additional migrations/seeds: `php spark migrate` / `php spark db:seed <SeederName>`
7. Start the development server: `php spark serve`
8. Visit `http://localhost:8080` in your browser

## 🚀 Future Roadmap

- ✅ Authentication with filtered access
- ✅ Employee CRUD management
- ✅ Dashboard with metrics
- ✅ Dark theme UI
- 🔜 Role-based access (admin vs. HR staff)
- 🔜 Search and filtering on the employees list
- 🔜 Exportable reports (CSV/PDF)
- 🔜 Attendance or leave tracking module

## 🤝 Contributing

Pull requests welcome! Please:

- 🔒 Never commit `.env` or real employee data
- 🧱 Keep new features within the standard CodeIgniter 4 MVC structure
- 🛡️ Route any new protected pages through the existing `AuthFilter`
- 🧪 Add tests under `tests/` for new controllers or models where practical

## About

A CodeIgniter 4 employee management system with authentication, full employee CRUD, a metrics dashboard, and a dark theme UI. 🧑‍💼📊

### Topics

`php` `codeigniter4` `mvc` `employee-management` `crud` `dashboard`

---

⭐ Stars · 👀 Watchers · 🍴 Forks
