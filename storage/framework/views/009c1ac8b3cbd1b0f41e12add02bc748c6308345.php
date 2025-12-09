<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        background-color: orange;
    }
    
</style>
<body>
    <form action="#" method="post">
    <?php echo csrf_field(); ?>  
    <h1 style="text-align: center;color:blue;">StudentList</h1>  
 
    <table border="1px" align="center" cellspacing="0px" cellpadding="10px">
            <tr>
                <th>StudentsID</th>
                <th>Name</th>
                <th>School</th>
                <th>Present</th>
            </tr>
            <tr>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($rw['studentid']); ?></td>
                <td><?php echo e($rw['studentname']); ?></td>
                <td><?php echo e($rw['school']); ?></td>
                <td><?php echo e($rw['present']); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </form>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/studentlist.blade.php ENDPATH**/ ?>