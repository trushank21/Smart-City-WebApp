
<?php $__env->startSection('content'); ?>
<script>
    
  function formvalid()
  {
    var result=false;
    if((lContactno.innerHTML==""))
    {
      result=true;
    }
    return result;
  }

</script>
<form action="/cprofileinsert" method="post" enctype="multipart/form-data" onSubmit="return formvalid()">
    <?php echo csrf_field(); ?>
<div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">PROFILE INSERT</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6 p-4 mb-4  bg-light"  style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
           
            <!-- <div class="form-group">
                    <label >ProfileID</label>
                    <input type="text" class="form-control" name="id" value="" readonly>
                    <label></label>
            </div>

                <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" name="Name" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-4  ">
                        <div class="form-group">
                        <label >ProfileID</label>
                        <input type="text" class="form-control" name="id" value="" readonly>
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label >Name</label>
                        <input type="text" class="form-control" name="Name" onChange="onlyalpha(this,lName)" value="">
                        <label style="color:red;" id="lName"></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>BirthDate</label>
                        <input type="date" class="form-control" name="Birthdate" value="">
                        <label></label>
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="Address" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                        
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="Address" value="">
                    <label></label>
                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Profile Picture</label>
                        <input type="file" class="form-control" name="image" value="">
                        <label></label>
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label>Cityid</label>
                    <input type="text" class="form-control" name="Cityid" value="">
                    <label></label>
                </div>

                <div class="form-group">
                    <label>Contactno</label>
                    <input type="text" class="form-control" name="Contactno" onkeyup="validateContactNumber(this, document.getElementById('lContactno'))" value="">
                    <label style="color:red;" id="lContactno"></label>
                </div> -->
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Cityid</label>
                        <input type="text" class="form-control" name="Cityid" value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Contactno</label>
                        <input type="text" class="form-control" name="Contactno" onkeyup="validateContactNumber(this, document.getElementById('lContactno'))" value="">
                        <label style="color:red;" id="lContactno"></label>
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
               <label >Gender</label>
               <div class="form-control">
               <input type="radio" name="Gender" value="male">Male
               <input type="radio" name="Gender" value="female">Female
                </div>
                <label></label>
                </div>

                <div class="form-group">
                    <label>Emailid</label>
                    <input type="email" class="form-control" name="Emailid"  onChange="checkemail(this,lemail)" value="">
                    <label style="color:red;"></label>
                </div> -->

               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label >Gender</label>
                        <div class="form-control">
                        <input type="radio" name="Gender" value="male">Male
                        <input type="radio" name="Gender" value="female">Female
                        </div>
                        <label></label>
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Emailid</label>
                    <input type="email" class="form-control" name="Emailid"  onChange="checkemail(this,lemail)" value="">
                    <label style="color:red;"></label>
                    </div>
                </div>
                </div>

                <!-- <div class="form-group">
                    <label>BirthDate</label>
                    <input type="date" class="form-control" name="Birthdate" value="">
                    <label></label>
                </div>
               
                <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control" name="image" value="">
                    <label></label>
                </div> -->

                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>BirthDate</label>
                        <input type="date" class="form-control" name="Birthdate" value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Profile Picture</label>
                        <input type="file" class="form-control" name="image" value="">
                        <label></label>
                        </div>
                    </div>
                </div> -->

                <div class="form-group  text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('mainhome') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/profileinsert.blade.php ENDPATH**/ ?>