<!-- Carousel -->
<div id="demo" class="carousel slide mt-2" data-bs-ride="carousel" style="overflow:hidden;">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img src="/videos/4K-White.jpg" alt="Chicago" class="d-block w-100">
      <!-- 🔁 Replace image with video -->
      <!-- <video class="d-block w-100" autoplay muted loop playsinline>
        <source src="/videos/1.mp4" type="video/mp4">
      </video> -->
    </div>
    
    <!-- Optional: You can add more videos or keep images in other slides -->
    <div class="carousel-item">
      <!-- <img src="/maintemplate/assets/img/hero2.jpg" alt="Chicago" class="d-block w-100"> -->
      <img src="/videos/itl.cat_winter-wallpaper-1920x1080_2069272.png" alt="Chicago" class="d-block w-100">
      <!-- <video class="d-block w-100" autoplay muted loop playsinline>
        <source src="/videos/2.mp4" type="video/mp4">
      </video> -->
    </div>
    <div class="carousel-item">
      <!-- <img src="/maintemplate/assets/img/hero3.jpg" alt="New York" class="d-block w-100"> -->
      <img src="/videos/4K-White-Wallpaper.jpg" alt="New York" class="d-block w-100">
      <!-- <video class="d-block w-100" autoplay muted loop playsinline>
        <source src="/videos/3.mp4" type="video/mp4">
      </video> -->
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button"  data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" ></span>
  </button>
  <button class="carousel-control-next" type="button"  data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon" ></span>
  </button>
</div>

<!-- Optional Custom Styles -->
<!-- <style>
  video.d-block {
    height: 100%;
    object-fit: cover;
  }
</style> -->
<?php /**PATH D:\Laravel\Project1\resources\views/main/slider.blade.php ENDPATH**/ ?>