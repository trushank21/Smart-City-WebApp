
<?php $__env->startSection('content'); ?>


<form action="/ccheckotp" method="post">
<?php echo csrf_field(); ?>
<div class="container">
  <div class="row mt-5 animate__animated animate__backInDown">
      <div class="col-md-4"></div>
      <div class="col-md-4 bg-light p-5 shadow" >
          <div class="form-group">
            <img src='/logoimage/otplogo.png'  style="width:100%;height:75px">
          </div>  
          <div class="form-group">
            <label><i class='bx bxs-pin' ></i><b>OTP</b></label>
            <input type="text" class="form-control mt-1"  name="otp" required placeholder="" autofocus>
           </div>
            <div class="form-group mt-3">
             <input type="submit"  class="btn btn-success w-100" name="submit" value="Submit">
            </div>
            <div class="form-group">
            <label>
            <?php 
            if(isset($msg))
            {
              echo $msg;
            } 
            ?>
            </label>   
            </div>
           
     </div>
    </div>
    </div>
</form> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/otp.blade.php ENDPATH**/ ?>