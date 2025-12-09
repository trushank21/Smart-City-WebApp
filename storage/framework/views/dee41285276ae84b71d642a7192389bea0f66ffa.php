<!-- <style>
/* Base style for nav link */
.nav-link.glowing-nav {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: #111;
    border-radius: 12px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.4);
    transition: all 0.3s ease;
    z-index: 1;
    overflow: hidden;
}

/* Glowing border animation */
.glow-border {
    position: absolute;
    content: "";
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    border-radius: 12px;
    padding: 2px;
    background: linear-gradient(270deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f);
    background-size: 1400% 1400%;
    animation: animatedGlow 6s ease infinite;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* Reveal on hover or active */
.nav-link.glowing-nav:hover .glow-border,
.nav-link.glowing-active .glow-border {
    opacity: 1;
}

/* Optional text glow on hover */
.nav-link.glowing-nav:hover {
    background: rgba(255, 255, 255, 0.6);
    color: #000;
}

/* Animate border gradient */
@keyframes  animatedGlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>  -->
<!-- <style>
/* @import  url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap'); */

body {
    background: white;
    font-family: 'Orbitron', sans-serif;
    color: #fff;
}

/* Entire sidebar RGB glowing border */
#layoutSidenav_nav {
    position: relative;
    background-color: #111 !important;
    border-radius: 0 12px 12px 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.1);
}
#layoutSidenav_nav::before {
    content: "";
    position: absolute;
    top: -3px;
    left: -3px;
    right: -3px;
    bottom: -3px;
    border-radius: 14px;
    background: linear-gradient(270deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f);
    background-size: 1600% 1600%;
    animation: animatedGlow 6s ease infinite;
    z-index: -1;
    filter: blur(8px);
    opacity: 0.5;
}

/* Nav link base style */
.nav-link.glowing-nav {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: #fff;
    border-radius: 12px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
    z-index: 1;
    overflow: hidden;
}

/* Glowing border animation */
.glow-border {
    position: absolute;
    content: "";
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    border-radius: 12px;
    padding: 2px;
    background: linear-gradient(270deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f);
    background-size: 1400% 1400%;
    animation: animatedGlow 6s ease infinite;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* Show glow on hover/active */
.nav-link.glowing-nav:hover .glow-border,
.nav-link.glowing-active .glow-border {
    opacity: 1;
}

.nav-link.glowing-nav:hover {
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
}

/* Active glowing nav */
.nav-link.glowing-active {
    color: #fff;
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 0 10px rgba(0, 255, 255, 0.2);
}

/* RGB animation keyframes */
@keyframes  animatedGlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style> -->

<!-- <style>
/* Sidebar nav link style */
.nav-link.glowing-nav {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: #fff;
    font-weight: 500;
    background: transparent;
    transition: all 0.3s ease;
    border-radius: 8px;
    text-decoration: none;
    z-index: 1;
}

/* Bottom RGB glow effect */
.nav-link.glowing-nav::after {
    content: "";
    position: absolute;
    left: 10%;
    bottom: 6px;
    width: 80%;
    height: 3px;
    background: linear-gradient(270deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f);
    background-size: 400% 400%;
    animation: underlineGlow 5s linear infinite;
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 10px;
}

/* Glow visible on hover or active */
.nav-link.glowing-nav:hover::after,
.nav-link.glowing-active::after {
    opacity: 1;
}

/* Optional hover background */
.nav-link.glowing-nav:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
}

/* RGB animation */
@keyframes  underlineGlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style> -->

 <!-- <style>
    /* Sidebar nav link with left vertical glow */
.nav-link.glowing-nav {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: #fff;
    border-radius: 12px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
    z-index: 1;
    overflow: hidden;
}

/* Glowing left vertical border */
.nav-link.glowing-nav::before {
    content: "";
    position: absolute;
    top: 10%;
    left: 0;
    width: 4px;
    height: 80%;
    background: linear-gradient(
        0deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f
    );
    background-size: 400% 400%;
    animation: verticalGlow 6s ease infinite;
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 4px;
}

/* Show glow on hover or active */
.nav-link.glowing-nav:hover::before,
.nav-link.glowing-active::before {
    opacity: 1;
}

/* Animate the vertical RGB gradient */
@keyframes  verticalGlow {
    0% { background-position: 0% 100%; }
    50% { background-position: 100% 0%; }
    100% { background-position: 0% 100%; }
}

</style>  -->

  <style>
    /* Main nav link */
.nav-link.glowing-nav {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: #fff;
    border-radius: 12px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
    z-index: 1;
    overflow: hidden;
}

/* Inner span for extra pseudo-elements */
.nav-link.glowing-nav .glow-inner {
    position: relative;
    z-index: 2;
}

/* Common glowing border style */
.nav-link.glowing-nav::before,
.nav-link.glowing-nav::after,
.nav-link.glowing-nav .glow-inner::before,
.nav-link.glowing-nav .glow-inner::after {
    content: "";
    position: absolute;
    background: linear-gradient(
        90deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f
    );
    background-size: 400% 400%;
    animation: verticalGlow 6s ease infinite;
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* Top border */
.nav-link.glowing-nav::before {
    top: 0;
    left: 0;
    height: 4px;
    width: 100%;
}

/* Bottom border */
.nav-link.glowing-nav::after {
    bottom: 0;
    left: 0;
    height: 4px;
    width: 100%;
}

/* Left border */
.nav-link.glowing-nav .glow-inner::before {
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
}

/* Right border */
.nav-link.glowing-nav .glow-inner::after {
    top: 0;
    right: 0;
    width: 4px;
    height: 100%;
}

/* Show glow on hover or active */
.nav-link.glowing-nav:hover::before,
.nav-link.glowing-nav:hover::after,
.nav-link.glowing-nav:hover .glow-inner::before,
.nav-link.glowing-nav:hover .glow-inner::after,
.nav-link.glowing-active::before,
.nav-link.glowing-active::after,
.nav-link.glowing-active .glow-inner::before,
.nav-link.glowing-active .glow-inner::after {
    opacity: 1;
}

/* Animation */
@keyframes  verticalGlow {
    0% { background-position: 0% 100%; }
    50% { background-position: 100% 0%; }
    100% { background-position: 0% 100%; }
}

</style>  

<!-- <style>
    .nav-link.glowing-nav {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: #fff;
    border-radius: 12px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
    z-index: 1;
    overflow: hidden;
}

/* Glowing right vertical border */
.nav-link.glowing-nav::after {
    content: "";
    position: absolute;
    top: 10%;
    right: 0;
    width: 4px;
    height: 80%;
    background: linear-gradient(
        0deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f
    );
    background-size: 400% 400%;
    animation: verticalGlow 6s ease infinite;
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 4px;
}

/* Show glow on hover or active */
.nav-link.glowing-nav:hover::after,
.nav-link.glowing-active::after {
    opacity: 1;
}

/* Animate the vertical RGB gradient */
@keyframes  verticalGlow {
    0% { background-position: 0% 100%; }
    50% { background-position: 100% 0%; }
    100% { background-position: 0% 100%; }
}

</style> -->


<!-- <style>
    .nav-link.glowing-nav {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    color: #fff;
    border-radius: 12px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
    z-index: 1;
    overflow: hidden;
}

/* Glowing right-side dot */
.nav-link.glowing-nav::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: linear-gradient(
        45deg,
        #ff004f,
        #ff8000,
        #faff00,
        #00ff6a,
        #00cfff,
        #8f00ff,
        #ff004f
    );
    background-size: 200% 200%;
    animation: glowingDot 3s linear infinite;
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* Show dot on hover or active */
.nav-link.glowing-nav:hover::after,
.nav-link.glowing-active::after {
    opacity: 1;
}

/* Dot glow animation */
@keyframes  glowingDot {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

</style> -->
<div id="layoutSidenav_nav" class="shadow  " >
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" >
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading " style="color:green;">Core</div>
                         
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('citizen') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('citizen')); ?>">
                            <div class="active sb-nav-link-icon"><i class='bx bxs-dashboard'></i></div>
                            Dashboard
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('ccityshow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('ccityshow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-city'></i></div>
                            City
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('feedbackinsert') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('feedbackinsert')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-comment-add'></i></div>
                            Feedback
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cprojectshow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('cprojectshow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bx-cog' ></i></div>
                            Project
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('ccollegeshow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('ccollegeshow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-graduation' ></i></div>
                            Education
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cmembershow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('cmembershow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-user-detail'></i></div>
                            Committee
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cfirestationshow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('cfirestationshow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-hot'></i></div>
                            Firestation
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('cpolicestationshow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('cpolicestationshow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bx-shield-quarter'></i></div>
                            Policestation
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('chospitalshow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('chospitalshow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-shield-plus'></i></div>
                            Hospital
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('complaininsert') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('complaininsert')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-report'></i></div>
                            Complain
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('ctaxshow') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('ctaxshow')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-credit-card'></i></div>
                            Tax Show
                                    <span class="glow-border"></span>
                            </a>
                           <a class="nav-link glowing-nav <?php echo e(request()->routeIs('reviewinsert') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('reviewinsert')); ?>">
                            <div class="sb-nav-link-icon"><i class='bx bxs-comment-add'></i></div>
                            Review Insert
                                    <span class="glow-border"></span>
                            </a>
                          
                           
                            <div  class="sb-sidenav-menu-heading" style="color:green;">Interface</div>
                            <a style="color:black;"  class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div style="color:black;" class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div style="color:black;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a style="color:black;" class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a style="color:black;" class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a style="color:black;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div style="color:black;" class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div style="color:black;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a style="color:black;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div style="color:black;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a style="color:black;" class="nav-link" href="login.html">Login</a>
                                            <a style="color:black;" class="nav-link" href="register.html">Register</a>
                                            <a style="color:black;" class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a style="color:black;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div style="color:black;"  class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a style="color:black;" class="nav-link" href="401.html">401 Page</a>
                                            <a style="color:black;" class="nav-link" href="404.html">404 Page</a>
                                            <a style="color:black;" class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div style="color:green;" class="sb-sidenav-menu-heading">Addons</div>
                            <a style="color:black;" class="nav-link" href="charts.html">
                                <div style="color:black;" class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a style="color:black;" class="nav-link" href="tables.html">
                                <div style="color:black;" class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div  class="sb-sidenav-footer navbar-dark bg-light">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>


                    
                </nav>
            </div>
         
            


<?php /**PATH D:\Laravel\Project1\resources\views/citizen/citizensidebar.blade.php ENDPATH**/ ?>