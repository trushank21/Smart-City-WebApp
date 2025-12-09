<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>

    <form action="/cregisterinsert" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="container">
        <h1 class="text-center mt-3">Registration</h1>
        <div class="row mt-3 ">
            <div class="col-md-4"></div>
            <div class="col-md-4 bg-warning p-4 border border-dark">

                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" value="">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="emailaddress" value="">
                </div>


                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" value="">
                </div>

                <div class="form-group mt-3">
                    <input class="btn btn-primary" type="submit" name="submit" value="submit">
                    <input class="btn btn-dark" type="submit" name="cancel" value="cancel">
                </div>

            </div>
        </div>
    </div>
</form>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/registerinsert.blade.php ENDPATH**/ ?>