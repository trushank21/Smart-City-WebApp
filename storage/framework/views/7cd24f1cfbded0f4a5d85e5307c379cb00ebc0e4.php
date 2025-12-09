

<?php $__env->startSection('content'); ?>
<form action="/customerhome" method="get">
    
<div class="container">
  <div class="row mt-5 animate__animated animate__backInRight">
      <div class="col-md-4"></div>
      <div class="col-md-4 shadow bg-light p-5" >
      <div class="form-group">
            <?php
               $transno=rand(100000,999999);
               echo("<p class='text-center text-secondary'><b><u>Transaction Id #$transno</u></b></p>"); 
            ?>
            <h2 class='text-center text-primary'>Payment Successful...</h2>
            <h3 class='text-center'>Thank You..</h3>  
        </div>

        <div class="form-group">
             <!-- <input type="submit"  class="btn btn-success w-100" name="submit" value="Goto Home"> -->
             <a class="btn btn-success w-100" href="<?php echo route ('citizen') ?>">Go to Home</a>
            </div>
     </div>
    </div>
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/paymentsuccess.blade.php ENDPATH**/ ?>