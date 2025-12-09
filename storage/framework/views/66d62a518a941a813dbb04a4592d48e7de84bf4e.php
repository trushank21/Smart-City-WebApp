
<?php $__env->startSection('content'); ?>

 <form action="/cmemberupdate" method="post" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3">
    <h1 class="text-center" style="color:darkgreen;">COMMITTEE UPDATE</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 p-4 mb-4  bg-light shadow">
        <div class="form-group">
        <label>MemberId</label>
        <input type="text" class="form-control" name="id" value="<?php echo e($member['id']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>MemberName</label>
        <input type="text" class="form-control" name="membername" value="<?php echo e($member['membername']); ?>" >
        </div>
        <div class="form-group">
        <label>Designation</label>
        <input type="text" class="form-control" name="designation" value="<?php echo e($member['designation']); ?>" >
        </div>
        <div class="form-group">
        <label>startdate</label>
        <input type="date" class="form-control" name="startdate" value="<?php echo e($member['startdate']); ?>" >
        </div>
        <div class="form-group">
        <label>responsibilities</label>
        <input type="text" class="form-control" name="responsibilities" value="<?php echo e($member['responsibilities']); ?>" >
        </div>
        <div class="form-group">
        <label>contactno</label>
        <input type="text" class="form-control" name="contactno" value="<?php echo e($member['contactno']); ?>" >
        </div>
        <div class="form-group">
        <label>emailid</label>
        <input type="text" class="form-control" name="emailid" value="<?php echo e($member['emailid']); ?>" >
        </div>
        <div class="form-group">
        <label>image</label>
        <!-- <input type="text" class="form-control" name="image" value="<?php echo e($member['image']); ?>" > -->
        <input class="form-control" type="file" name="image" value="">
        </div>
        <div class="form-group">
        <label>department</label>
        <input type="text" class="form-control" name="department" value="<?php echo e($member['department']); ?>" >
        </div>

        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a href="<?php echo route('cmemberlist') ?>" class="btn btn-danger">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/memberupdate.blade.php ENDPATH**/ ?>