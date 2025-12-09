

<?php $__env->startSection('content'); ?>


<form action="/ccarddetails" method="POST">
<?php echo csrf_field(); ?>  
<div class="container">
  <div class="row mt-5 animate__animated animate__backInDown">
      <div class="col-md-4"></div>
      <div class="col-md-4 p-5 shadow bg-light" >
          <div class="form-group">
            <img src='/logoimage/paytmlogo.png' style="width:100%;height:75px">
          </div>  
          <div class="form-group">
            <label>Card Number:</label>
            <input type="text" class="form-control"  name="cardnumber" required placeholder="" autofocus>
           </div>
            <div class="form-group"> 
              <label>Expiry Date:</label>
              <input type="text"  class="form-control" name="expirydate" required placeholder="MM/YY">
            </div>
            <div class="form-group">
              <label>CVV:</label>
              <input type="text"  class="form-control" id="cvv" name="cvv" required placeholder="">
            </div>
            <div class="form-group">
              <label>Amount:</label>
              <input type="text"  class="form-control" id="amount" name="amount" value="<?php echo e(Session::get('amount')); ?>" >
              </div>
            <div class="form-group mt-2">
             <input type="submit"  class="btn btn-success w-100" name="otp" value="OTP" class="pay-button">
            </div>
            <div class="form-group">
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
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/carddetails.blade.php ENDPATH**/ ?>