
<?php $__env->startSection('content'); ?>
<!-- <form action="#" method="post"> -->

<div class="container">
    <h1 class="text-center text-success">FIRESTATION LIST</h1>
<?php $__currentLoopData = $firestation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 shadow">
          <div class="card-body text-center">
            <img src="firestationimages/<?php echo e($fir['image']); ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo e($fir['stationname']); ?> </h5>
            <p class="text-muted mb-1"><?php echo e($fir['location']); ?></p>
            <p class="text-muted mb-4"><?php echo e($fir['headname']); ?></p>
            <div class="d-flex justify-content-center form-group">
              <!-- <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Follow</button> -->
              <a href="/cfirestationsearch/<?php echo e($fir['id']); ?>" class="btn btn-success form-control me-1" style="text-decoration: none;">Update</a>
              <a href="/cfirestationdelete/<?php echo e($fir['id']); ?>" class="btn btn-secondary form-control me-1" style="text-decoration: none;">Delete</a>
              <a href="<?php echo route('firestationinsert') ?>" class="btn btn-primary form-control me-1" style="text-decoration: none;">New</a>
              <a href="<?php echo route('admin') ?>" class="btn btn-danger form-control" style="text-decoration: none;">Cancel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body shadow">
         
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">stationid</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($fir['id']); ?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">ContactNo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($fir['contactno']); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">emailid</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($fir['emailid']); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Description</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($fir['description']); ?></p>
              </div>
            </div>
            
           




          </div>
            
          </div>
           
          </div>
          
        
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   
    <!-- </form> -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/firestationlist.blade.php ENDPATH**/ ?>