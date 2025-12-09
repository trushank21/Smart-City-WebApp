<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <form action="/clogininsert" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4"></div>
                <div class="col-md-4 border border-dark p-4">

                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" type="text" name="uname" value="">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="uemail" value="">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="upassword" value="">
                    </div>

                    <div class="form-group mt-3">
                        <input class="btn btn-primary " type="submit" name="submit" value="submit">
                        <input class="btn btn-dark" type="submit" name="cancel" value="cancel">
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/logininsert.blade.php ENDPATH**/ ?>