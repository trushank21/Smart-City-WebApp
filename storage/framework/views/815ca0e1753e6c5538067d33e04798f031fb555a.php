
<?php $__env->startSection('content'); ?>

 <form action="/cprojectupdate" method="post">
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3">
    <h1 class="text-center" style="color:darkgreen;">PROJECT UPDATE</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 p-4 mb-4  bg-light shadow">
        <div class="form-group">
        <label>ProjectId</label>
        <input type="text" class="form-control" name="id" value="<?php echo e($project['id']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>ProjectName</label>
        <input type="text" class="form-control" name="projectname" value="<?php echo e($project['projectname']); ?>" >
        </div>
        <div class="form-group">
        <label>ProjectType</label>
        <input type="text" class="form-control" name="projecttype" value="<?php echo e($project['projecttype']); ?>" >
        </div>
        <div class="form-group">
        <label>startdate</label>
        <input type="date" class="form-control" name="startdate" value="<?php echo e($project['startdate']); ?>" >
        </div>
        <div class="form-group">
        <label>enddate</label>
        <input type="date" class="form-control" name="enddate" value="<?php echo e($project['enddate']); ?>" >
        </div>
        <div class="form-group">
        <label>description</label>
        <input type="text" class="form-control" name="description" value="<?php echo e($project['description']); ?>" >
        </div>
        <div class="form-group">
        <label>projecthead</label>
        <input type="text" class="form-control" name="projecthead" value="<?php echo e($project['projecthead']); ?>" >
        </div>
        <div class="form-group">
        <label>amount</label>
        <input type="text" class="form-control" name="amount" value="<?php echo e($project['amount']); ?>" >
        </div>
        <div class="form-group">
        <label>status</label>
        <input type="text" class="form-control" name="status" value="<?php echo e($project['status']); ?>" >
        </div>
        <div class="form-group">
        <label>headcontactno</label>
        <input type="text" class="form-control" name="headcontactno" value="<?php echo e($project['headcontactno']); ?>" >
        </div>
        <div class="form-group">
        <label>heademailid</label>
        <input type="email" class="form-control" name="heademailid" value="<?php echo e($project['heademailid']); ?>" >
        </div>
        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a href="<?php echo route('cprojectlist') ?>" class="btn btn-danger">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/projectupdate.blade.php ENDPATH**/ ?>