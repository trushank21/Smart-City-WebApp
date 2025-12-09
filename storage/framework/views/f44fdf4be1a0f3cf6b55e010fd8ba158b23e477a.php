<style>
    .move{
        transition: transform 0.3s;
    }

.move:hover {
      transform: translateY(-5px);
    }
    </style>

<?php $__env->startSection('content'); ?>

<!-- <h1 class="text-center" style="color:green;">ADMIN PANEL</h1> -->

    

  

    <div class="box mt-3">
        <!-- Row 1: Welcome + Profile Section -->
        <div class="row ">
            <div class="col-md-8 animate__animated animate__fadeInDownBig">
                <h2 class="text-success">Welcome, Admin</h2>
                <p class="text-muted">Manage city services, monitor reports, and ensure smooth operations.</p>
            </div>
            <!-- <div class="col-md-4 text-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="Admin Profile">
                        <h5>Admin Name</h5>
                        <p class="text-muted">Role: Super Admin</p>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- Row 2: Dashboard Analytics -->
        <div class="row my-3">
            <div class="col-md-4 animate__animated animate__fadeInLeftBig">
                <div class="card text-white bg-primary mb-3 move">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p>👥 12,345 Registered Citizens</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInDownBig">
                <div class="card text-white bg-success mb-3 move">
                    <div class="card-body">
                        <h5 class="card-title">Services Active</h5>
                        <p>🛠 56 Public Services Running</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInRightBig">
                <div class="card text-white bg-danger mb-3 move">
                    <div class="card-body">
                        <h5 class="card-title">Pending Complaints</h5>
                        <p>⚠ 234 Unresolved Issues</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Management Sections -->
        <div class="row">
            <div class="col-md-6 animate__animated animate__fadeInLeftBig">
                <div class="card shadow-sm move">
                    <div class="card-body">
                        <h5 class="card-title">User Management</h5>
                        <p>👤 Approve new user registrations, manage roles and permissions.</p>
                        <a href="#" class="btn btn-primary">Manage Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate__animated animate__fadeInRightBig">
                <div class="card shadow-sm move">
                    <div class="card-body">
                        <h5 class="card-title">City Reports</h5>
                        <p>📊 View financial reports, service statistics, and city analytics.</p>
                        <a href="#" class="btn btn-success">View Reports</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 4: System Settings & Notifications -->
        <div class="row mt-4">
            <div class="col-md-6 animate__animated animate__fadeInLeftBig">
                <div class="card shadow-sm move">
                    <div class="card-body">
                        <h5 class="card-title">System Settings</h5>
                        <p>⚙ Configure system preferences, security settings, and backups.</p>
                        <a href="#" class="btn btn-warning">Go to Settings</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate__animated animate__fadeInRightBig">
                <div class="card shadow-sm move">
                    <div class="card-body">
                        <h5 class="card-title">Send Notifications</h5>
                        <p>📢 Broadcast alerts, emergency notifications, and public messages.</p>
                        <a href="#" class="btn btn-danger">Send Alerts</a>
                    </div>
                </div>
            </div>
        </div>

        </div>

    <!-- Footer -->
    <!-- <footer class="text-center text-white bg-dark p-3 mt-4">
        <p>© 2025 Smart City Admin. All rights reserved.</p>
    </footer> -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/admin.blade.php ENDPATH**/ ?>