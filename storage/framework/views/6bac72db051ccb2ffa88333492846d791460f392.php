
<?php $__env->startSection('content'); ?>

 <form action="/chospitalupdate" method="post" enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3">
    <h1 class="text-center" style="color:darkgreen;">HOSPITAL UPDATE</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 p-4 mb-4  bg-light shadow" >
        <div class="form-group">
        <label>HospitalID</label>
        <input type="text" class="form-control" name="id" value="<?php echo e($hospital['id']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>HospitalName</label>
        <input type="text" class="form-control" name="hospitalname" value="<?php echo e($hospital['hospitalname']); ?>" >
        </div>
        <div class="form-group">
        <label>Headname</label>
        <input type="text" class="form-control" name="headname" value="<?php echo e($hospital['headname']); ?>" >
        </div>
        <div class="form-group">
        <label>ContactNo</label>
        <input type="text" class="form-control" name="contactno" value="<?php echo e($hospital['contactno']); ?>" >
        </div>
        <div class="form-group">
        <label>EmailID</label>
        <input type="emailid" class="form-control" name="emailid" value="<?php echo e($hospital['emailid']); ?>" >
        </div>
        <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location" value="<?php echo e($hospital['location']); ?>" >
        </div>
        <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image"  >
        </div>
        <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="description" value="<?php echo e($hospital['description']); ?>" >
        </div>
        
        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a href="<?php echo route('chospitallist') ?>" class="btn btn-danger">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/hospitalupdate.blade.php ENDPATH**/ ?>