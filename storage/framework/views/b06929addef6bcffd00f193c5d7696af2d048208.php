
<?php $__env->startSection('content'); ?>


<form action="/ccomplainupdate" method="post">
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3">
    <h1 class="text-center" style="color:darkgreen;">COMPLAIN UPDATE</h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 p-4 mb-4  bg-light shadow" >
        <div class="form-group">
        <label>ComplainId</label>
        <input type="text" class="form-control" name="id" value="<?php echo e($complain['id']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>ComplainDate</label>
        <input type="text" class="form-control" name="complaindate" value="<?php echo e($complain['complaindate']); ?>" readonly>
        </div>
        <div class="form-group">
        <label>Citizenid</label>
        <input type="text" class="form-control" name="regid" value="<?php echo e($complain['regid']); ?>" readonly >
        </div>
        <div class="form-group">
        <label>Complain</label>
        <!-- <textarea type="text" class="form-control" name="complain" rows='5' cols='30'  value="<?php echo e($complain['complain']); ?>" readonly></textarea> -->
        <input type="text" class="form-control" name="complain" value="<?php echo e($complain['complain']); ?>" readonly >
        <label></label>
        </div>
        <div class="form-group">
        <label>Solution</label>
        <!-- <textarea class="form-control" name="solution" rows='5' cols='30' value=""></textarea> -->
        <input type="text" class="form-control" name="solution" value="<?php echo e($complain['solution']); ?>"  autofocus="true">
        <label></label>
        </div>
       
        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a href="<?php echo route('admin') ?>" class="btn btn-danger">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/complainupdate.blade.php ENDPATH**/ ?>