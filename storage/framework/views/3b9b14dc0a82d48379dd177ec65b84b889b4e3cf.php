
<?php $__env->startSection('content'); ?>

<form action="/ccomplaininsert" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="container">
        <div class="row  mt-3 animate__animated animate__bounceInDown">
        <h1 class="text-center " style="color:darkgreen;">COMPLAIN INSERT<i class='bx bxs-report' ></i></h1>
            <div class="col-md-4"></div>
            <div class="col-md-4 p-4 mb-4  bg-light shadow"  >
            
                <!-- <div class="form-group">
                    <label>ComplainID</label>
                    <input type="text" class="form-control" name="complainid" value="" readonly>
                    <label></label>
                </div> -->
                <div class="form-group">
                    <label>ComplainDate<span style="color:red;">*</span></label>
                    <input type="date" class="form-control" name="complaindate" value="">
                    <label></label>
                </div>

                
                
                <div class="form-group">
        <label>Complain<span style="color:red;">*</span></label>
        <textarea class="form-control" name="complain" rows='5' cols='30' value="" ></textarea>
        <label></label>
        </div>
                
                

                <!-- <div class="form-group">
        <label>Solution</label>
        <textarea class="form-control" name="solution" rows='5' cols='30' value="" readonly></textarea>
        <label></label>
        </div> -->
               
               
                <div class="form-group ">
                        <input class="btn btn-success" type="submit" name="submit" value="submit">
                        <a href="<?php echo route('ccomplainsolution') ?>" class="btn btn-primary">See Solution</a>
                        
                        
                        <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
                        <a href="<?php echo route('citizen') ?>" class="btn btn-danger">Cancel</a>
                    </div>
            </div>
        </div>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/complaininsert.blade.php ENDPATH**/ ?>