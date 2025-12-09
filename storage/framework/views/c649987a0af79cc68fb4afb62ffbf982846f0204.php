



<!-- ----------- -->
<?php $__env->startSection('content'); ?>

<!-- -------------------------------------------- -->

<section class="animate__animated animate__backInLeft" style="background-color:white;">
  <div class="container  h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 shadow">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <!-- <img src="https://images.unsplash.com/photo-1473081556163-2a17de81fc97?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMGdyZWVuJTIwbGVhZnxlbnwwfHwwfHx8MA%3D%3D"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:80vh;" /> -->
                <video class="d-block w-100" autoplay muted loop playsinline>
        <source src="/videos/8.mp4"  type="video/mp4">
      </video>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/cforgotpwd" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                    <span class="h1 fw-bold mb-0">Hello!</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Forgot Password</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Email</label>
                    <input type="text" name="emailaddress" class="form-control form-control-lg" placeholder="Enter email" />
                    
                  </div>

                  <div class=" text-danger mb-2">
                    <?php 
                    if(isset($msg)){
                     echo  $msg;
                        }
                    ?>
                    </div>

                    

                  <div class="text-center mt-2">
                    <!-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button> -->
                    <input class="btn btn-dark btn-lg btn-block w-75" type="submit" name="submit" value="submit">
                    <a class="btn btn-danger  btn-lg btn-block" href="<?php echo route ('mainhome') ?>">Cancel</a>
                  </div>

                  


        
                      
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/forgotpwd.blade.php ENDPATH**/ ?>