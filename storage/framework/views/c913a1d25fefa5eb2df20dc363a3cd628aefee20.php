
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
    /* background: rgba(255, 255, 255, 0.4); */
    background: white;
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
/* Base style for nav link */
.nav-link.glowing-nav {
    position: relative;
    display: inline-block;
    padding: 0.75rem 1rem;
    color: #111;
    font-weight: 500;
    background: transparent;
    transition: all 0.3s ease;
    z-index: 1;
    text-decoration: none;
}

/* Underline glow effect */
.nav-link.glowing-nav::after {
    content: "";
    position: absolute;
    left: 10%;
    bottom: 0;
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

/* Show glow on hover or if active */
.nav-link.glowing-nav:hover::after,
.nav-link.glowing-active::after {
    opacity: 1;
}

/* Animate underline gradient */
@keyframes  underlineGlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style> -->
<style>
  .nav-link.glowing-nav {
    position: relative;
    display: inline-block;
    padding: 0.5rem 1rem;
    color: #111;
    font-weight: 500;
    background: transparent;
    transition: all 0.3s ease;
    z-index: 1;
    text-decoration: none;
}

/* Adjusted underline glow effect */
.nav-link.glowing-nav::after {
    content: "";
    position: absolute;
    left: 10%;
    bottom: 5px; /* <-- Reduced to bring it closer */
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

/* Show underline glow on hover/active */
.nav-link.glowing-nav:hover::after,
.nav-link.glowing-active::after {
    opacity: 1;
}

/* Gradient animation */
@keyframes  underlineGlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<header id="header" class="header d-flex align-items-center sticky-top shadow bg-white">
    <div class="container position-relative d-flex align-items-center">

      <a href="<?php echo route('mainhome') ?>" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename ">SmartCity</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          

          <li><a  class=" active me-2   nav-link glowing-nav <?php echo e(request()->routeIs('mainhome') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('mainhome')); ?>"><span class="glow-border"></span>Home</a></li>
          <li><a  class="me-2  nav-link glowing-nav <?php echo e(request()->routeIs('mainregistration') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('mainregistration')); ?>"><span class="glow-border"></span>Register</a></li>
          <li><a  class="me-2  nav-link glowing-nav <?php echo e(request()->routeIs('mainlogin') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('mainlogin')); ?>"><span class="glow-border"></span>Login</a></li>
          <li><a  class="me-2  nav-link glowing-nav <?php echo e(request()->routeIs('aboutus') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('aboutus')); ?>"><span class="glow-border"></span>About Us</a></li>
          <li><a  class="me-2  nav-link glowing-nav  <?php echo e(request()->routeIs('maincontact') ? 'glowing-active' : ''); ?>" href="<?php echo e(route('maincontact')); ?>"><span class="glow-border"></span>Contact&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list "></i>
      </nav>

      <div class="header-social-links">
        <a href="https://www.facebook.com/trushank.patel.18/" class="facebook"><i class='bx bxl-facebook-circle bx-tada' ></i></a>
        <a href="https://www.instagram.com/trushank_21/?igsh=MTE5YmxlMjZranl6bQ%3D%3D" class="instagram"><i class='bx bxl-instagram-alt bx-tada' ></i></a>
        <a href="https://www.linkedin.com/in/trushank-patel-a16ab1318/" class="linkedin"><i class='bx bxl-linkedin-square bx-tada' ></i></a>
      </div>

    </div>
  </header><?php /**PATH D:\Laravel\Project1\resources\views/main/header.blade.php ENDPATH**/ ?>