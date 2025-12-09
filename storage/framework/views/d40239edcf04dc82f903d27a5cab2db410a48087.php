
<?php $__env->startSection('content'); ?>

<form action="/cstate" method="post">
    <?php echo csrf_field(); ?>
<div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">State</h1>
            <div class="col-md-4"></div>
            <div class="col-md-4 p-4 mb-4  bg-dark"  style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
                
                <div class="form-group">
                    <label style="color: white;">statename</label>
                    <input type="text" class="form-control" name="statename" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Shortname</label>
                    <input type="text" class="form-control" name="Shortname" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">CountryID</label>
                    <input type="text" class="form-control" name="Countryid" value="">
                </div>
                <div class="form-group mt-3 text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('admin') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
</form>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/state.blade.php ENDPATH**/ ?>