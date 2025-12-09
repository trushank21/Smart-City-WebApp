
<?php $__env->startSection('content'); ?>
<style>

    .log-reg{
        color:white;
        transition: 0s;
    }
    .log-reg:hover{
        text-decoration: underline;
        color: green;
    }
</style>
<form action="/clogin" method="post">
    <?php echo csrf_field(); ?>
<div class="container">
            <div class="row mt-3 ">
            <h1 class="text-center" style="color:darkgreen;">ADMIN LOGIN</h1>
                <div class="col-md-3"></div>
                <div class="col-md-6  p-4 mb-4  bg-light" style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
                    
                    <div class="form-group">
                        <label >Username</label>
                        <input class="form-control" type="text" name="uname" value="">
                    </div>

                    <div class="form-group">
                        <label >Password</label>
                        <input class="form-control" type="password" name="upassword" value="">
                    </div>

                    <div class="form-group mt-3 text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <input class="btn btn-danger" type="submit" name="cancel" value="cancel">
                    </div>

            

                </div>
            </div>
        </div>
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/adminlogin.blade.php ENDPATH**/ ?>