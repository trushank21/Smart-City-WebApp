


<?php $__env->startSection('content'); ?>

<!-- -------------------------------------------- -->

<section  class="animate__animated animate__fadeInLeft"  style="background-color:white;">
  <div  class="container  h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col col-xl-10 ">
        <div class="card " style="border-radius: 1rem;">
          <div class="row g-0 shadow ">
            <div class="col-md-6 col-lg-5 d-none d-md-block ">
              <!-- <img src="https://wallpapercave.com/wp/wp12369453.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:80vh;" /> -->
                <video class="d-block w-100" autoplay muted loop playsinline>
        <source src="/videos/tttss.mp4" type="video/mp4">
    
      </video>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center ">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/clogin" method="post">
                <?php echo csrf_field(); ?>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                    <span class="h1 fw-bold mb-0 ">Hello!</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <i class='bx bxs-user' ></i><label class="form-label" for="form2Example17">Username<span style="color:red;">*</span></label>
                    <input type="text" name="uname" class="form-control form-control-lg" placeholder="Enter username" autofocus="true"/>
                    
                  </div>

                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-lock-alt' ></i><label class="form-label" for="form2Example27">Password<span style="color:red;">*</span></label>
                    <input type="password" name="upassword" class="form-control form-control-lg" placeholder="Enter password" />
                    
                  </div>
                  <div class=" text-danger mb-2">
                    <?php 
                    if(isset($msg)){
                     echo  $msg;
                        }
                    ?>
                    </div>

                    <div class="remember-forgot mt-2" style="display:flex;justify-content:space-between;">
                        <label><input type="checkbox"> Remember me</label>
                    <a class="text-success" href="<?php echo route('forgotpwd') ?>">Forgot password?</a>
                    </div>

                  <div class="text-center mt-2 ">
                    <!-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button> -->
                    <input class="btn btn-dark btn-lg btn-block w-75 " type="submit" name="submit" value="submit">
          
                    <a class="btn btn-danger  btn-lg btn-block" href="<?php echo route ('mainhome') ?>">Cancel</a>
                  </div>

                  


                 
                  <p  class=" pb-lg-2 text-center mt-2" style="color: #393f81;">Don't have an account? <a class="text-success" href="<?php echo route('mainregistration')?>"
                      style="color: #393f81;">Register here</a></p>
                      
                  
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
<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/mainlogin.blade.php ENDPATH**/ ?>