
<?php $__env->startSection('content'); ?>
<!-- <form action="#" method="post"> -->
<?php echo csrf_field(); ?>
   
    <!-- </form> -->



<!-- -------------------------------- -->

  <div class="container">
    <h1 class="text-center text-success">COMMITTEE LIST</h1>
  <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="memberimages/<?php echo e($mem['image']); ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo e($mem['membername']); ?> </h5>
            <p class="text-muted mb-1"><?php echo e($mem['emailid']); ?></p>
            <p class="text-muted mb-4"><?php echo e($mem['department']); ?></p>
            <div class="d-flex justify-content-center form-group">
              <!-- <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Follow</button> -->
              <a href="/cmembersearch/<?php echo e($mem['id']); ?>" class="btn btn-success form-control me-1" style="text-decoration: none;">Update</a>
              <a href="/cmemberdelete/<?php echo e($mem['id']); ?>" class="btn btn-secondary form-control me-1" style="text-decoration: none;">Delete</a>
              <a href="<?php echo route('memberinsert') ?>" class="btn btn-primary form-control me-1" style="text-decoration: none;">New</a>
              <a href="<?php echo route('admin') ?>" class="btn btn-danger form-control" style="text-decoration: none;">Cancel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">designation</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($mem['designation']); ?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">startdate</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($mem['startdate']); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Responsibilities</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($mem['responsibilities']); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">ContactNo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e($mem['contactno']); ?></p>
              </div>
            </div>
            
            




          </div>
            
          </div>
           
          </div>
          
        
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   
    
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/memberlist.blade.php ENDPATH**/ ?>