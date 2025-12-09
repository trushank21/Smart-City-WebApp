
<?php $__env->startSection('content'); ?>

<form action="/cprofile" method="post">
    <?php echo csrf_field(); ?>
<div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">PROFILE</h1>
            <div class="col-md-4"></div>
            <div class="col-md-4 p-4 mb-4  bg-dark"  style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
                
                <div class="form-group">
                    <label style="color: white;">Name</label>
                    <input type="text" class="form-control" name="Name" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Address</label>
                    <input type="text" class="form-control" name="Address" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">ID</label>
                    <input type="text" class="form-control" name="CityId" value="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Details</label>
                    <input type="text" class="form-control" name="Contactno" value="">
                </div>
                <div class="form-group">
               <label style="color:white;">Gender</label>
               <div class="form-control">
               <input type="radio" name="gender" value="male">Male
               <input type="radio" name="gender" value="female">Female
           </div>
           
           <div class="form-group">
                    <label style="color: white;">EmailID</label>
                    <input type="email" class="form-control" name="Emailid" value="">
                </div>

                <div class="form-group">
                    <label style="color: white;">BirthDate</label>
                    <input type="date" class="form-control" name="Birthdate" value="">
                </div>

                <div class="form-group">
                    <label style="color: white;">Image</label>
                    <input type="image" class="form-control" name="Image" value="">
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
<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/profile.blade.php ENDPATH**/ ?>