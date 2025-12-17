<?= $this->extend('employees/layouts/main') ?>

<?= $this->section('content') ?>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i>Add New Employee</h4>
                </div>
                <div class="card-body p-4">

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <?= $validation->listErrors() ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <?= form_open('employees/create') ?>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" class="form-control" value="<?= old('first_name') ?>" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control" value="<?= old('middle_name') ?>">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" class="form-control" value="<?= old('last_name') ?>" required>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Birthday</label>
                                <input type="date" name="birthday" class="form-control" value="<?= old('birthday') ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-select" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male" <?= old('gender') == 'Male' ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?= old('gender') == 'Female' ? 'selected' : '' ?>>Female</option>
                                    <option value="Other" <?= old('gender') == 'Other' ? 'selected' : '' ?>>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                <input type="text" name="nationality" class="form-control" value="<?= old('nationality') ?>" placeholder="e.g., Filipino" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" name="mobile_number" class="form-control" value="<?= old('mobile_number') ?>" placeholder="09XXXXXXXXX" required>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Height (cm) <span class="text-danger">*</span></label>
                                <input type="number" name="height" class="form-control" value="<?= old('height') ?>" min="100" max="250" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Weight (kg) <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="weight" class="form-control" value="<?= old('weight') ?>" min="30" max="300" required>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Province <span class="text-danger">*</span></label>
                                <input type="text" name="province" class="form-control" value="<?= old('province') ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City/Municipality <span class="text-danger">*</span></label>
                                <input type="text" name="city" class="form-control" value="<?= old('city') ?>" required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-dark btn-lg">
                                <i class="bi bi-check-circle me-1"></i> Add Employee
                            </button>
                            <a href="<?= base_url('employees') ?>" class="btn btn-secondary btn-lg ms-2">
                                Cancel
                            </a>
                        </div>

                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>