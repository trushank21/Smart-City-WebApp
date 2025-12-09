
<?php $__env->startSection('content'); ?>
<!-- <form action="#" method="post"> -->

    <div class="container">
        <div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">COMPLAIN SOLUTION<i class='bx bxs-report'></i></h1>
            <div class="col-md-1"></div>
            <div class="col-md-10 p-4 mb-4">
                <div class="table-responsive">
               <table class="table table-bordered  bg-light ">    

                    <tr>
                        <th>ID</th>
                        <th>complaindate</th>
                        <th>regid</th>
                        <th class="bg-danger text-light" >Complain</th>
                        <th class="bg-success text-light">Solution</th>
                        
                    </tr>

                    <?php $__currentLoopData = $complain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($comp['id']); ?></td>
                        <td><?php echo e($comp['complaindate']); ?></td>
                        <td><?php echo e($comp['regid']); ?></td>
                        <td ><?php echo e($comp['complain']); ?></td>
                        <td ><?php echo e($comp['solution']); ?></td>
                        
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
               </table>
              
               <div>
               <a class="btn btn-danger" href="<?php echo route('complaininsert') ?>">Cancel</a>
               </div>
               </div>
            </div>
        </div>
    </div>
    <!-- </form> -->


    



<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen/complainsolution.blade.php ENDPATH**/ ?>