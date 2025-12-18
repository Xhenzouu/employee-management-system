<!-- Workforce Metrics Dashboard -->
<div class="row mb-5 g-4">
    <!-- Total Employees Card -->
    <div class="col-lg-4">
        <div class="card text-white bg-dark shadow h-100">
            <div class="card-body d-flex flex-column justify-content-center text-center">
                <i class="bi bi-people-fill fs-1 mb-3 opacity-75"></i>
                <h5 class="card-title">Total Employees</h5>
                <h2 class="display-4 mb-0"><?= esc($totalEmployees) ?></h2>
            </div>
        </div>
    </div>

    <!-- Gender Distribution Doughnut Chart -->
    <div class="col-lg-8">
        <div class="card shadow h-100">
            <div class="card-header bg-dark text-white text-center">
                <h5 class="mb-0">Gender Distribution</h5>
            </div>
            <div class="card-body d-flex align-items-center justify-content-center">
                <canvas id="genderChart" width="300" height="300"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('genderChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Male', 'Female', 'Other'],
                datasets: [{
                    data: [
                        <?= $genderCount['Male'] ?>,
                        <?= $genderCount['Female'] ?>,
                        <?= $genderCount['Other'] ?>
                    ],
                    backgroundColor: [
                        '#0d6efd',  // Blue
                        '#dc3545',  // Red
                        '#6c757d'   // Gray
                    ],
                    borderColor: '#ffffff',
                    borderWidth: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            font: { size: 14 }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = context.parsed;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = total > 0 ? Math.round((value / total) * 100) : 0;
                                return context.label + ': ' + value + ' (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    });
</script>