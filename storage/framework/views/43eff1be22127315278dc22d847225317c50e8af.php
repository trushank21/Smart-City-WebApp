
<footer id="footer" class="footer dark-background shadow " >

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">SmartCity</span>
      </a>
      <div class="footer-contact pt-3">
        <p>Made by</p>
        <p>Trushank Patel</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+91 97237-12701</span></p>
        <p><strong>Email:</strong> <span>cse.210840131062@gmail.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href="//www.google.com"><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="<?php echo route('mainhome') ?>">Home</a></li>
        <li><a href="<?php echo route('aboutus') ?>">About us</a></li>
        
        <li><a href="<?php echo route('maincontact')  ?>">ContactUs</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Popular Attractions</a></li>
        <li><a href="#">Healthcare Centers</a></li>
        <li><a href="#">Job Listings & Opportunities</a></li>
        <li><a href="#">Educational Institutions</a></li>
        <li><a href="#">Ongoing & Upcoming Projects</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
      <h4>Our Newsletter</h4>
      <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
      <form action="forms/newsletter.php" method="post" class="php-email-form">
        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
      </form>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">WebtechPro</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
  </div>
</div>

</footer><?php /**PATH D:\Laravel\Project1\resources\views/main/footer.blade.php ENDPATH**/ ?>