
<?php $__env->startSection('content'); ?>

 <form action="/ccollegeupdate" method="post" enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3">
    <h1 class="text-center" style="color:darkgreen;">EDUCATION UPDATE</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 p-4 mb-4  bg-light shadow"  >
        <div class="form-group">
        <label>CityId</label>
        <input type="text" class="form-control" name="id" value="<?php echo e($college['id']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>CollegeName</label>
        <input type="text" class="form-control" name="collegename" value="<?php echo e($college['collegename']); ?>" >
        </div>
        <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" value="<?php echo e($college['address']); ?>" >
        </div>
        <div class="form-group">
        <label>City</label>
        <input type="text" class="form-control" name="city" value="<?php echo e($college['city']); ?>" >
        </div>
        <div class="form-group">
        <label>Pincode</label>
        <input type="text" class="form-control" name="pincode" value="<?php echo e($college['pincode']); ?>" >
        </div>
        <div class="form-group">
        <label>ContactNo</label>
        <input type="text" class="form-control" name="contactno" value="<?php echo e($college['contactno']); ?>" >
        </div>
        <div class="form-group">
        <label>EmailID</label>
        <input type="email" class="form-control" name="emailid" value="<?php echo e($college['emailid']); ?>" >
        </div>
        <div class="form-group">
        <label>CollegeType</label>
        <input type="text" class="form-control" name="collegetype" value="<?php echo e($college['collegetype']); ?>" >
        </div>
        <div class="form-group">
        <label>TrustName</label>
        <input type="text" class="form-control" name="trustname" value="<?php echo e($college['trustname']); ?>" >
        </div>
        <div class="form-group">
        <label>courselist</label>
        <input type="text" class="form-control" name="courselist" value="<?php echo e($college['courselist']); ?>" >
        </div>
        <div class="form-group">
        <label>image</label>
        <!-- <input type="text" class="form-control" name="image" value="<?php echo e($college['image']); ?>" > -->
        <input class="form-control" type="file" name="image" value="">
        </div>
        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a href="<?php echo route('ccollegelist') ?>" class="btn btn-danger">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/collegeupdate.blade.php ENDPATH**/ ?>