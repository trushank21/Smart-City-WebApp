
<?php $__env->startSection('content'); ?>

 <form action="/cfirestationupdate" method="post" enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3">
    <h1 class="text-center" style="color:darkgreen;">FIRESTATION UPDATE</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 p-4 mb-4  bg-light shadow"  >
        <div class="form-group">
        <label>StationID</label>
        <input type="text" class="form-control" name="id" value="<?php echo e($firestation['id']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>StationName</label>
        <input type="text" class="form-control" name="stationname" value="<?php echo e($firestation['stationname']); ?>" >
        </div>
        <div class="form-group">
        <label>Headname</label>
        <input type="text" class="form-control" name="headname" value="<?php echo e($firestation['headname']); ?>" >
        </div>
        <div class="form-group">
        <label>ContactNo</label>
        <input type="text" class="form-control" name="contactno" value="<?php echo e($firestation['contactno']); ?>" >
        </div>
        <div class="form-group">
        <label>EmailID</label>
        <input type="emailid" class="form-control" name="emailid" value="<?php echo e($firestation['emailid']); ?>" >
        </div>
        <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location" value="<?php echo e($firestation['location']); ?>" >
        </div>
        <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image"  >
        </div>
        <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="description" value="<?php echo e($firestation['description']); ?>" >
        </div>
        
        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a href="<?php echo route('cfirestationlist') ?>" class="btn btn-danger">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/firestationupdate.blade.php ENDPATH**/ ?>