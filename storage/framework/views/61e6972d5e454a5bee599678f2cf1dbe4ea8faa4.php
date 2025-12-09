<style>
.nav-link.glowing-nav {
    position: relative;
    color: black;
    padding-right: 2.5rem;
    transition: all 0.3s ease-in-out;
    overflow: visible;
    z-index: 1;
}

.nav-link.glowing-nav.active::after {
    content: '';
    position: absolute;
    top: 50%;
    right: -10px;
    transform: translateY(-50%);
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: linear-gradient(45deg, #ff0040, #ff9500, #f8ff00, #00ff85, #00c3ff, #7a00ff, #ff00d4);
    background-size: 300% 300%;
    animation: rgbGlowMove 4s ease infinite, floatY 2s ease-in-out infinite;
    box-shadow: 0 0 8px rgba(255, 255, 255, 0.3), 0 0 20px rgba(0, 255, 255, 0.6);
    backdrop-filter: blur(3px);
}

@keyframes  rgbGlowMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes  floatY {
    0%, 100% { transform: translateY(-50%) translateY(0); }
    50% { transform: translateY(-50%) translateY(-5px); }
}

</style>





<!-- --------------------- -->

<div id="layoutSidenav_nav" class="shadow">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <div class="sb-sidenav-menu-heading" style="color:green;">Core</div>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('admin') ? 'active' : ''); ?>" href="<?php echo e(route('admin')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-dashboard'></i></div> Dashboard
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('ccitylist') ? 'active' : ''); ?>" href="<?php echo e(route('ccitylist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-city'></i></div> City
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('email') ? 'active' : ''); ?>" href="<?php echo e(route('email')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-envelope'></i></div> Email
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cfeedbackshow') ? 'active' : ''); ?>" href="<?php echo e(route('cfeedbackshow')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-comment-detail'></i></div> Feedback
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cprojectlist') ? 'active' : ''); ?>" href="<?php echo e(route('cprojectlist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-cog'></i></div> Project
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('ccollegelist') ? 'active' : ''); ?>" href="<?php echo e(route('ccollegelist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-graduation'></i></div> Education
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cmemberlist') ? 'active' : ''); ?>" href="<?php echo e(route('cmemberlist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-user-detail'></i></div> Committee
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cuserlist') ? 'active' : ''); ?>" href="<?php echo e(route('cuserlist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-user-rectangle'></i></div> User
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cfirestationlist') ? 'active' : ''); ?>" href="<?php echo e(route('cfirestationlist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-hot'></i></div> FireStation
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cpolicestationlist') ? 'active' : ''); ?>" href="<?php echo e(route('cpolicestationlist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bx-shield-quarter'></i></div> PoliceStation
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('chospitallist') ? 'active' : ''); ?>" href="<?php echo e(route('chospitallist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-shield-plus'></i></div> Hospital
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('ccomplainlist') ? 'active' : ''); ?>" href="<?php echo e(route('ccomplainlist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-report'></i></div> Complain Solution
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('creviewshow') ? 'active' : ''); ?>" href="<?php echo e(route('creviewshow')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-comment-add'></i></div> Review
                </a>

                <a class="nav-link glowing-nav <?php echo e(request()->routeIs('ctaxlist') ? 'active' : ''); ?>" href="<?php echo e(route('ctaxlist')); ?>">
                    <div class="sb-nav-link-icon"><i class='bx bxs-credit-card'></i></div> Taxlist
                </a>

                <div class="sb-sidenav-menu-heading" style="color:green;">Interface</div>

                <!-- Layout and Pages links unchanged for now, you can update them too -->

            </div>
        </div>
        <div class="sb-sidenav-footer navbar-dark bg-light">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>

          <?php /**PATH D:\Laravel\Project1\resources\views/admin/adminsidebar.blade.php ENDPATH**/ ?>