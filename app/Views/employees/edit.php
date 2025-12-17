<?= $this->extend('employees/layouts/main') ?>

<?= $this->section('content') ?>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Edit Employee</h4>
                </div>
                <div class="card-body p-4">

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <?= $validation->listErrors() ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <?= form_open('employees/edit/' . $employee['id']) ?>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" class="form-control" 
                                       value="<?= old('first_name', esc($employee['first_name'])) ?>" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control" 
                                       value="<?= old('middle_name', esc($employee['middle_name'])) ?>">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" class="form-control" 
                                       value="<?= old('last_name', esc($employee['last_name'])) ?>" required>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Birthday</label>
                                <input type="date" name="birthday" class="form-control" 
                                       value="<?= old('birthday', esc($employee['birthday'])) ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-select" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male" <?= old('gender', $employee['gender']) == 'Male' ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?= old('gender', $employee['gender']) == 'Female' ? 'selected' : '' ?>>Female</option>
                                    <option value="Other" <?= old('gender', $employee['gender']) == 'Other' ? 'selected' : '' ?>>Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Repeat the same pattern for other fields, using esc() and old() properly -->
                        <!-- I'll abbreviate for brevity - copy the same structure -->

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                <input type="text" name="nationality" class="form-control" 
                                       value="<?= old('nationality', esc($employee['nationality'])) ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" name="mobile_number" class="form-control" 
                                       value="<?= old('mobile_number', esc($employee['mobile_number'])) ?>" required>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Height (cm) <span class="text-danger">*</span></label>
                                <input type="number" name="height" class="form-control" 
                                       value="<?= old('height', esc($employee['height'])) ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Weight (kg) <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="weight" class="form-control" 
                                       value="<?= old('weight', esc($employee['weight'])) ?>" required>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Province <span class="text-danger">*</span></label>
                                <input type="text" name="province" class="form-control" 
                                       value="<?= old('province', esc($employee['province'])) ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City/Municipality <span class="text-danger">*</span></label>
                                <input type="text" name="city" class="form-control" 
                                       value="<?= old('city', esc($employee['city'])) ?>" required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-dark btn-lg">
                                <i class="bi bi-check-circle me-1"></i> Save Changes
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