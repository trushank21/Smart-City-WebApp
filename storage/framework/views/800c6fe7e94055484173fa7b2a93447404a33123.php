<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollegeInsert</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" >
    <style>
        h1{
            text-align: center;
            color: blue;
        }
    </style>
</head>
<body>
    <form action="/ccollegeinsert" method="post">
        <?php echo csrf_field(); ?>
        <h1 class="mt-3">CollegeInsert</h1>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-3 p-5 border border-danger bg-warning">

                    <div class="form-group">
                        <label>CollegeName</label>
                        <input class="form-control" type="text" name="collegename"  value="">
                    </div>

                    <div class="form-group">
                        <label>CollegePincode</label>
                        <input class="form-control" type="text" name="collegepincode" value="">
                    </div>

                    <div class="form-group mt-3">
                        <input class="btn btn-success w-75" type="submit" name="submit" value="submit">
                        <input class="btn btn-danger" type="submit" name="cancel" value="cancel">
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/collegeinsert.blade.php ENDPATH**/ ?>