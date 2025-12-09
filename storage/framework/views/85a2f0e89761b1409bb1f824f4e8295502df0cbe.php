
<?php $__env->startSection('content'); ?>

<form action="/cpolicestationinsert" method="post"  enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="container">
        <div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">POLICESTATION INSERT</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6 p-4 mb-4  bg-light shadow"  >
            
                <div class="form-group">
                    <label>Policestationname</label>
                    <input type="text" class="form-control" name="stationname" value="">
                    <label></label>
                </div>
                <div class="form-group">
                    <label>headname</label>
                    <input type="text" class="form-control" name="headname" value="">
                    <label></label>
                </div>

                <!-- <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="">
                    <label></label>
                </div>
               
                <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" class="form-control" name="pincode" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>ContactNo</label>
                        <input type="text" class="form-control" name="contactno" value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>EmailID</label>
                        <input type="text" class="form-control" name="emailid" value="">
                        <label></label>
                        </div>
                    </div>
                </div>
               
                <!-- <div class="form-group">
                    <label>contactno</label>
                    <input type="text" class="form-control" name="contactno" onkeyup="validateContactNumber(this, document.getElementById('lcontactno'))" value="">
                    <label style="color:red;"  id="lcontactno"></label>
                </div>

                <div class="form-group">
                    <label>emailid</label>
                    <input type="email" class="form-control" name="emailid" onChange="checkemail(this,lemailid)" value="">
                    <label style="color:red;"  id="lemailid"></label>
                </div> -->
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>location</label>
                        <input type="text" class="form-control" name="location"  value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>image</label>
                        <input type="file" class="form-control" name="image"  value="">
                        <label></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" value="">
                    <label></label>
                </div>
             
            
                <div class="form-group  text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('cpolicestationlist') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
    </div>

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/policestationinsert.blade.php ENDPATH**/ ?>