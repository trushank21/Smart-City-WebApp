
<?php $__env->startSection('content'); ?>

<form action="/cfirestationinsert" method="post"  enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="container">
        <div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">FIRESTATION INSERT</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6 p-4 mb-4  bg-light shadow">
            
                <div class="form-group">
                    <label>stationname</label>
                    <input type="text" class="form-control" name="stationname" value="">
                    <label></label>
                </div>
                <div class="form-group">
                    <label>headname</label>
                    <input type="text" class="form-control" name="headname" value="">
                    <label></label>
                </div>

                

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
                        
                        <a href="<?php echo route('cfirestationlist') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
    </div>

</form>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/firestationinsert.blade.php ENDPATH**/ ?>