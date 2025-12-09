
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Card Details</h1>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <table class="table table-bordered" cellspacing='0px'>
        <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Subject</th>
        <th>Message</th>
    </tr>

<?php $__currentLoopData = $email; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
     <td><?php echo e($em['id']); ?></td>
     <td><?php echo e($em['emaildate']); ?></td>
     <td><?php echo e($em['subject']); ?></td>
     <td><?php echo e($em['message']); ?></td>
     </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/emailshow.blade.php ENDPATH**/ ?>