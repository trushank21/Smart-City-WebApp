
<?php $__env->startSection('content'); ?>
<script>
    
  function formvalid()
  {
    var result=false;
    if((lcontactno.innerHTML=="")  && (lemailid.innerHTML=="") )
    {
      result=true;
    }
    return result;
  }

</script>
<form action="/cmemberinsert" method="post" onSubmit="return formvalid()" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="container">
        <div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">COMMITEE INSERT</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6 p-4 mb-4  bg-light shadow" >
            
                <!-- <div class="form-group">
                    <label>Membername</label>
                    <input type="text" class="form-control" name="membername" value="">
                    <label></label>
                </div>

                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Membername</label>
                        <input type="text" class="form-control" name="membername" value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" name="designation" value="">
                        <label></label>
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label>StartDate</label>
                    <input type="date" class="form-control" name="startdate" value="">
                    <label></label>
                </div>
               
                <div class="form-group">
                    <label>Responsibilities</label>
                    <input type="text" class="form-control" name="responsibilities" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>StartDate</label>
                        <input type="date" class="form-control" name="startdate" value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Responsibilities</label>
                        <input type="text" class="form-control" name="responsibilities" value="">
                        <label></label>
                        </div>
                    </div>
                </div>
               
                <!-- <div class="form-group">
                    <label>ContactNo</label>
                    <input type="text" class="form-control" name="contactno" onkeyup="validateContactNumber(this, document.getElementById('lcontactno'))" value="">
                    <label style="color:red;"  id="lcontactno"></label>
                </div>
               
                <div class="form-group">
                    <label>EmailID</label>
                    <input type="text" class="form-control" name="emailid" onChange="checkemail(this,lemailid)" value="">
                    <label style="color:red;"  id="lemailid"></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>ContactNo</label>
                        <input type="text" class="form-control" name="contactno" onkeyup="validateContactNumber(this, document.getElementById('lcontactno'))" value="">
                        <label style="color:red;"  id="lcontactno"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>EmailID</label>
                        <input type="text" class="form-control" name="emailid" onChange="checkemail(this,lemailid)" value="">
                        <label style="color:red;"  id="lemailid"></label>
                        </div>
                    </div>
                </div>
               
                <!-- <div class="form-group">
                    <label>image</label>
                    <input type="file" class="form-control" name="image" value="">
                    <label></label>
                </div>

                <div class="form-group">
                    <label>department</label>
                    <input type="text" class="form-control" name="department" value="">
                    <label></label>
                </div> -->
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>image</label>
                        <input type="file" class="form-control" name="image" value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>department</label>
                        <input type="text" class="form-control" name="department" value="">
                        <label></label>
                        </div>
                    </div>
                </div>

                <div class="form-group  text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('cmemberlist') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
    </div>

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/memberinsert.blade.php ENDPATH**/ ?>