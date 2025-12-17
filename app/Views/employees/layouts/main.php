<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body { background-color: #f8f9fa; }
        .navbar { box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .table-container { background: white; border-radius: 8px; overflow: hidden; }
        .table-hover tbody tr:hover { background-color: #f1f3f5; }
        footer { margin-top: 60px; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="<?= base_url('employees') ?>">
                <i class="bi bi-people-fill me-2"></i> Employee Management System
            </a>
            <div class="ms-auto d-flex align-items-center gap-3">
                <?php if (session()->has('user_id')): ?>
                    <span class="text-white">Hello, <?= esc(session('username')) ?></span>

                    <!-- Logout Button triggers modal -->
                    <button type="button" class="btn btn-outline-light btn-md" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                <?php endif; ?>

                <a href="<?= base_url('employees/create') ?>" class="btn btn-light btn-md">
                    <i class="bi bi-person-plus-fill me-1"></i> Add New Employee
                </a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumbs -->
    <div class="container-fluid mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('employees') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Employees List</li>
            </ol>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="container-fluid mt-3 px-4">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 text-muted border-top">
        <p>Employee Management System © 2025 | Developed with CodeIgniter 4</p>
    </footer>

    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="logoutModalLabel">
                        <i class="bi bi-box-arrow-right text-danger me-2"></i> Confirm Logout
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <p class="mb-0">Are you sure you want to log out?</p>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">
                        Yes, Log Out
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>