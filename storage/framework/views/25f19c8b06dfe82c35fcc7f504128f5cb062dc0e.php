

<?php $__env->startSection('content'); ?>

      
  
    <!-- ----------------------- -->
    <section class="mt-5 mb-5" style="background-color:white;">
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center h-100 animate__animated animate__bounceInDown ">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 shadow">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <!-- <img src="https://wallpapercrafter.com/th8001/537668-forest-plant-leaves-fern-fauna-green-nature.jpg"
                alt="login form" style="height:100%;" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:80vh;" /> -->
                <video class="d-block w-100" autoplay muted loop playsinline>
        <source src="/videos/7.mp4" type="video/mp4">
      </video>
           
              </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/cchangepassword" method="post">
                <?php echo csrf_field(); ?>
                  <div class="d-flex align-items-center mb-3 pb-1">
                   
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Change Password</h5>

                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-user' ></i><label class="form-label" for="form2Example17">RegID</label>
                    <input type="text" name="regid" class="form-control form-control-lg"  value="<?php echo e(Session::get('regid')); ?>"  readonly />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-user' ></i><label class="form-label" for="form2Example17">Username</label>
                    <input type="text" name="uname" class="form-control form-control-lg"  value="<?php echo e(Session::get('uname')); ?>"  readonly />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-lock-alt' ></i><label class="form-label" for="form2Example27">Current Password</label>
                    <input type="password" name="currentpassword" class="form-control form-control-lg" placeholder="Enter current password" autofocus="true" /> 
                  </div>
                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-lock-alt' ></i><label class="form-label" for="form2Example27">New Password</label>
                    <input type="password" name="newpassword" class="form-control form-control-lg" placeholder="Enter new password" /> 
                  </div>
                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-lock-alt' ></i><label class="form-label" for="form2Example27">Re-Enter Password</label>
                    <input type="password" name="repassword" class="form-control form-control-lg" placeholder="Re-Enter new password" /> 
                  </div>
                

                    

                  <div class="text-center mt-2">
                    <!-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button> -->
                    <input class="btn btn-dark btn-lg btn-block w-75" type="submit" name="submit" value="submit">
                    <a class="btn btn-danger  btn-lg btn-block" href="<?php echo route ('citizen') ?>">Cancel</a>
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




<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/changepassword.blade.php ENDPATH**/ ?>