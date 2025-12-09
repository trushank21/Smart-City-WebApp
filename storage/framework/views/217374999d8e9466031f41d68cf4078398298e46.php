
<?php $__env->startSection('content'); ?>

<form action="/ctaxinsert" method="post"  enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="container">
        <div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">TAX INSERT</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6 p-4 mb-4  bg-light"  style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
            
             
                <div class="form-group">
                    <label>RegID</label>
                    <input type="text" class="form-control" name="regid" value="<?php echo e($register->regid); ?>" readonly>
                    <label></label>
                </div>
                <div class="form-group">
                    <label>uname</label>
                    <input type="text" class="form-control" name="uname" value="<?php echo e($register->uname); ?>" readonly>
                    <label></label>
                </div>

                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" name="amount" value="230" readonly>
                    <label></label>
                </div>
             
            
                <div class="form-group  text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('ctaxlist') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
    </div>

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/taxinsert.blade.php ENDPATH**/ ?>