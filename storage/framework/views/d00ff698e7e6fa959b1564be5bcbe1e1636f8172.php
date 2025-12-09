<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollegeList</title>
</head>
<body>
    <form action="#" method="post">
        <?php echo csrf_field(); ?>
        <h1 style="text-align: center;">CollegeList</h1>
        <table border="1px" cellspacing="0px" cellpadding="10px" align="center">
            <tr>
                <th>CollegeID</th>
                <th>CollegeName</th>
                <th>Pincode</th>
            </tr>
            <tr>
                <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($rw['collegeid']); ?></td>
                <td><?php echo e($rw['collegename']); ?></td>
                <td><?php echo e($rw['collegepincode']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </form>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/collegelist.blade.php ENDPATH**/ ?>