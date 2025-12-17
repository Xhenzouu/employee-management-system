<?= $this->extend('employees/layouts/main') ?>

<?= $this->section('content') ?>

    <!-- Alerts -->
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <!-- Table Card -->
    <div class="card table-container shadow">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Full Name</th>
                            <th>Birthday</th>
                            <th>Gender</th>
                            <th>Nationality</th>
                            <th>Height (cm)</th>
                            <th>Weight (kg)</th>
                            <th>Mobile</th>
                            <th>Location</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($employees): ?>
                            <?php foreach ($employees as $employee): ?>
                                <tr>
                                    <td><strong><?= esc($employee['full_name']) ?></strong></td>
                                    <td><?= esc($employee['birthday']) ?: '<em>Not specified</em>' ?></td>
                                    <td><?= esc(ucfirst($employee['gender'])) ?></td>
                                    <td><?= esc($employee['nationality']) ?></td>
                                    <td><?= esc($employee['height']) ?></td>
                                    <td><?= esc($employee['weight']) ?></td>
                                    <td><?= esc($employee['mobile_number']) ?></td>
                                    <td class="text-truncate" style="max-width: 180px;" title="<?= esc($employee['city'] . ', ' . $employee['province']) ?>">
                                        <?= esc($employee['city'] . ', ' . $employee['province']) ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('employees/edit/' . $employee['id']) ?>" 
                                           class="btn btn-sm btn-outline-warning text-dark fw-semibold me-1" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="<?= base_url('employees/delete/' . $employee['id']) ?>" 
                                           class="btn btn-sm btn-outline-danger text-dark fw-semibold" title="Delete"
                                           onclick="return confirm('Delete <?= esc($employee['full_name']) ?>?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center py-5 text-muted">No employees found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <?php if (isset($pager) && $pager->getPageCount() > 1): ?>
            <div class="card-footer bg-light d-flex justify-content-between align-items-center py-3">
                <div class="text-muted small">
                    Showing <?= ($pager->getCurrentPageNumber() - 1) * 15 + 1 ?> to 
                    <?= min($pager->getCurrentPageNumber() * 15, $pager->getTotal()) ?> 
                    of <?= $pager->getTotal() ?> records
                </div>
                <div>
                    <?= $pager->links() ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

<?= $this->endSection() ?>