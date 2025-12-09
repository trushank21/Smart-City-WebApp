
<?php $__env->startSection('content'); ?>

<form action="/cemail" method="post">
    <?php echo csrf_field(); ?>
<div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">PROFILE</h1>
            <div class="col-md-4"></div>
            <div class="col-md-4 p-4 mb-4  bg-dark"  style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
                
                <div class="form-group">
                    <label style="color: white;">EmailDate</label>
                    <input type="date" class="form-control" name="Emaildate" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Emailfrom</label>
                    <input type="email" class="form-control" name="Emailfrom" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Emailto</label>
                    <input type="email" class="form-control" name="Emailto" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Subject</label>
                    <input type="text" class="form-control" name="Subject" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Details</label>
                    <input type="text" class="form-control" name="Details" value="">
                </div>
           
           <div class="form-group">
                    <label style="color: white;">RegID</label>
                    <input type="text" class="form-control" name="Regid" value="">
                </div>

                <div class="form-group mt-3 text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('mainhome') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
</form>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/email.blade.php ENDPATH**/ ?>