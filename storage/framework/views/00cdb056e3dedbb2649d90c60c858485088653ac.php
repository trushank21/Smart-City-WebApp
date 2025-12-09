
<?php $__env->startSection('content'); ?>
<script>
    
  function formvalid()
  {
    var result=false;
    if((lheademailid.innerHTML=="") && (lheadcontactno.innerHTML=="") )
    {
      result=true;
    }
    return result;
  }

</script>
<form action="/cprojectinsert" method="post"  onSubmit="return formvalid()">
<?php echo csrf_field(); ?>
<div class="container">
        <div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">PROJECT INSERT</h1>
            <div class="col-md-3"></div>
            <div class="col-md-6 p-4 mb-4  bg-light shadow" >
            
                <!-- <div class="form-group">
                    <label>Projectename</label>
                    <input type="text" class="form-control" name="projectname" value="">
                    <label></label>
                </div>
               
                <div class="form-group">
                    <label>ProjectType</label>
                    <input type="text" class="form-control" name="projecttype" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>ProjectName</label>
                    <input type="text" class="form-control" name="projectname" value="">
                    <label></label>
                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>ProjectType</label>
                    <input type="text" class="form-control" name="projecttype" value="">
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
                    <label>EndDate</label>
                    <input type="date" class="form-control" name="enddate" value="">
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
                        <label>EndDate</label>
                        <input type="date" class="form-control" name="enddate" value="">
                        <label></label>
                        </div> 
                    </div>
                </div>
               
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" value="">
                    <label></label>
                </div>
                <div class="form-group">
                    <label>ProjectHead</label>
                    <input type="text" class="form-control" name="projecthead" value="">
                    <label></label>
                </div>
               
                <!-- <div class="form-group">
                    <label>amount</label>
                    <input type="text" class="form-control" name="amount" value="">
                    <label></label>
                </div>

                <div class="form-group">
                    <label>status</label>
                    <input type="text" class="form-control" name="status" value="">
                    <label></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>amount</label>
                        <input type="text" class="form-control" name="amount" value="">
                        <label></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>status</label>
                        <input type="text" class="form-control" name="status" value="">
                        <label></label>
                        </div>
                    </div>
                </div>
               
                <!-- <div class="form-group">
                    <label>headcontactno</label>
                    <input type="text" class="form-control" name="headcontactno" onkeyup="validateContactNumber(this, document.getElementById('lheadcontactno'))" value="">
                    <label style="color:red;" id="lheadcontactno"></label>
                </div>
               
                <div class="form-group">
                    <label>heademailid</label>
                    <input type="email" class="form-control" name="heademailid" onChange="checkemail(this,lheademailid)" value="">
                    <label style="color:red;" id="lheademailid"></label>
                </div> -->

                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>headcontactno</label>
                    <input type="text" class="form-control" name="headcontactno" onkeyup="validateContactNumber(this, document.getElementById('lheadcontactno'))" value="">
                    <label style="color:red;" id="lheadcontactno"></label>
                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>heademailid</label>
                    <input type="email" class="form-control" name="heademailid" onChange="checkemail(this,lheademailid)" value="">
                    <label style="color:red;" id="lheademailid"></label>
                </div>
                    </div>
                </div>
               
                <div class="form-group text-center">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('cprojectlist') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
    </div>

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/projectinsert.blade.php ENDPATH**/ ?>