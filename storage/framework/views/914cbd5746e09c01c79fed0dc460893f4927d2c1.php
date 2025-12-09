<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterList</title>
    <style>
        h1{
            text-align: center;
            color: blue;
        }
        table{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
    <?php echo csrf_field(); ?>
        <h1>REGISTER LIST</h1>
    <table align="center" border="1px" cellspacing="0px" cellpadding="10px">
 <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
 </tr>
    <?php $__currentLoopData = $registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
     <td><?php echo e($rw['regid']); ?></td>
     <td><?php echo e($rw['username']); ?></td>
     <td><?php echo e($rw['emailaddress']); ?></td>
     <td><?php echo e($rw['password']); ?></td>
   </tr> 
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    </form>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/registerlist.blade.php ENDPATH**/ ?>