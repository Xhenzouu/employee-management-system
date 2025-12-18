<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="bi bi-exclamation-triangle text-danger me-2"></i> Confirm Delete
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <p class="mb-0">Are you sure you want to delete <strong id="deleteEmployeeName"></strong>?</p>
                <p class="text-muted small mt-3">This action cannot be undone.</p>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <a href="#" class="btn btn-danger" id="confirmDeleteBtn">
                    Yes, Delete
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to populate modal with employee name and delete URL
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const employeeName = button.getAttribute('data-name');
            const deleteUrl = button.getAttribute('data-url');

            // Update modal content
            document.getElementById('deleteEmployeeName').textContent = employeeName;
            document.getElementById('confirmDeleteBtn').href = deleteUrl;
        });
    });
</script>