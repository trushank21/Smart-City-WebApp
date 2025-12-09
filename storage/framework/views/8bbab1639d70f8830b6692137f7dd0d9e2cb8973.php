
<?php $__env->startSection('content'); ?>

 <form action="/ccityupdate" method="post">
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3">
    <h1 class="text-center" style="color:darkgreen;">CITY UPDATE</h1>
        <div class="col-md-4"></div>
        <div class="col-md-4 p-4 mb-4  bg-light"  style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
        <div class="form-group">
        <label>CityId</label>
        <input type="text" class="form-control" name="cityid" value="<?php echo e($city['cityid']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>CityName</label>
        <input type="text" class="form-control" name="cityname" value="<?php echo e($city['cityname']); ?>" >
        </div>
        <div class="form-group">
        <label>ShortName</label>
        <input type="text" class="form-control" name="cityshortname" value="<?php echo e($city['cityshortname']); ?>" >
        </div>
        <div class="form-group">
        <label>Pincode</label>
        <input type="text" class="form-control" name="pincode" value="<?php echo e($city['pincode']); ?>" >
        </div>
        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a href="<?php echo route('admin') ?>" class="btn btn-danger">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/cityupdate.blade.php ENDPATH**/ ?>