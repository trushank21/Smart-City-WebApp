<style>
/* Custom select wrapper */
.custom-select-wrapper {
  position: relative;
}

/* Custom select element */
.custom-select-wrapper select {
  appearance: none; /* Removes default arrow */
  -webkit-appearance: none;
  -moz-appearance: none;
  background: white;
  padding-right: 30px;
  border: 1px solid #ccc;
}

/* Dropdown arrow */
.custom-select-wrapper::after {
  content: '\25BC'; /* ▼ arrow character */
  font-size: 14px;
  color: darkgreen;
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  pointer-events: none;
}
</style>



<?php $__env->startSection('content'); ?>

<form action="/creviewinsert" method="post" enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>
 <div class="container">
    <div class="row  mt-3 animate__animated animate__bounceInDown">
    <h1 class="text-center" style="color:darkgreen;">REVIEW INSERT<i class='bx bxs-comment-add'></i></h1>
        <div class="col-md-3"></div>
        <div class="col-md-6 p-4 mb-4  bg-light shadow"  >
        
        <div class="form-group">
        <label>Reviewdate<span style="color:red;">*</span></label>
        <input type="date" class="form-control" name="reviewdate" value=""  >
        </div>
        <!-- <div class="form-group">
        <label>CitizenID</label>
        <input type="text" class="form-control" name="citizenid" value="" >
        </div> -->
        <div class="form-group">
        <label>Review<span style="color:red;">*</span></label>
        <input type="text" class="form-control" name="review" value="" >
        </div>
        <div class="form-group">
        <label>rating<span style="color:red;">*</span></label>
        <input type="text" class="form-control" name="rating" value="" >
        </div>
        
        
        <div class="form-group">
    <label>ReviewFor</label>
    <div class="custom-select-wrapper">
        <select name="reviewfor" class="form-control">
            <option value="college">Education</option>
            <option value="firestation">Firestation</option>
            <option value="policestation">PoliceStation</option>
            <option value="hospital">Hospital</option>
        </select>
    </div>
</div>

        
        
        <div class="form-group mt-3 text-center">
            <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
             <!-- <input class="btn btn-danger" type="submit" name="cancel" value="cancel"> -->
            <a class="btn btn-danger" href="<?php echo route('citizen') ?>">Cancel</a>
       </div>
    </div>
    </div>
</div>  
</form> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/reviewinsert.blade.php ENDPATH**/ ?>