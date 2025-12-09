
<?php $__env->startSection('content'); ?>


<form class="forms-sample " action="/csendemail" method="post"  >
  <?php echo csrf_field(); ?>
 <div class="container " >
 <h2 class='text-center mt-3 animate__animated animate__bounceInDown' style="color:green;">Send Email to User</h2>
    <div class="row mt-3 animate__animated animate__bounceInDown">
    <div class="col-md-3"></div>
      <div class="col-md-6 bg-light shadow">
        <div class="form-group">
         
        </div>
        <div class="form-group mt-3 mb-1">
        <i class='bx bxs-envelope'></i>
        <label>Email Address<span style="color:red;">*</span></label>
        <input type="text" class="form-control" name="emailto" placeholder="enter email address">
        </div>
        <div class="form-group mt-1 mb-1">
        <i class='bx bx-subdirectory-right' ></i>
        <label>Subject<span style="color:red;">*</span></label>
        <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
        </div>
        <div class="form-group mt-1 mb-1">
        <i class='bx bxs-message-rounded-dots'></i>
        <label>Message<span style="color:red;">*</span></label>
        <textarea class="form-control" name="message" rows='5' cols='30'></textarea>
        </div>
        <div class="form-group mt-2 mb-3 text-center">
        <button type="submit" class="btn btn-success me-2 w-75">Submit</button>
        
        <a class="btn btn-danger" href="<?php echo route('admin') ?>">Cancel</a>
       </div>
    </div>
  </div>
</div>  
</form> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/email.blade.php ENDPATH**/ ?>