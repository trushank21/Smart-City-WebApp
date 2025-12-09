
<?php $__env->startSection('content'); ?>

<form action="/cfeedbackinsert" method="post">
    <?php echo csrf_field(); ?>
<div class="row  mt-3 animate__animated animate__bounceInDown">
        <h1 class="text-center" style="color:darkgreen;">FEEDBACK INSERT<i class='bx bxs-comment-detail'></i></h1>
            <div class="col-md-4"></div>
            <div class="col-md-4 p-4 mb-4  bg-light  shadow "  >
                
                <!-- <div class="form-group">
                    <label>Fbdate</label>
                    <input type="date" class="form-control" name="Fbdate" value="">
                    <label></label>
                </div> -->

                <!-- <div class="form-group">
                    <label>RegID</label>
                    <input type="text" class="form-control" name="Regid" value="">
                    <label></label>
                </div>

                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="Id" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Fbdate</label>
                    <input type="date" class="form-control" name="Fbdate" value="">
                    <label></label>
                </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" name="Id" value="">
                        <label></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Details<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="Details" value="">
                    <label></label>
                </div>
               
                <div class="form-group">
                    <label>Stars<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="Stars" value="">
                    <label></label>
                </div>
               
                <div class="form-group text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('citizen') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/feedbackinsert.blade.php ENDPATH**/ ?>