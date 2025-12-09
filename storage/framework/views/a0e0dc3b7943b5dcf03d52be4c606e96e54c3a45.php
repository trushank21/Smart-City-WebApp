
<?php $__env->startSection('content'); ?>
<!-- <form action="#" method="post"> -->

    <div class="container">
        <div class="row  mt-3">
        <h1 class="text-center" style="color:darkgreen;">COMPLAIN SHOW</h1>
            <div class="col-md-1"></div>
            <div class="col-md-10 p-4 mb-4">
                <div class="table-responsive">
               <table class="table table-bordered bg-light">    

                    <tr>
                        <th>ID</th>
                        <th>complaindate</th>
                        <th>citizenid</th>
                        <th>complain</th>
                        <th>solution</th>
                        <th>Give Solution</th> 
                    </tr>

                    <?php $__currentLoopData = $complain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($comp['id']); ?></td>
                        <td><?php echo e($comp['complaindate']); ?></td>
                        <td><?php echo e($comp['citizenid']); ?></td>
                        <td><?php echo e($comp['complain']); ?></td>
                        <td><?php echo e($comp['solution']); ?></td>
                        <td><a href="/ccomplainsearch/<?php echo e($comp['id']); ?>" style="text-decoration: none;">Give Solution</a></td>
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
               </table>
               </div>
            </div>
        </div>
    </div>
    <!-- </form> -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/complainlist.blade.php ENDPATH**/ ?>