<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">

</head>
<body>
    <form action="/cstudentinsert" method="post" enctype="multipart/form-data">
     <?php echo csrf_field(); ?>
        <div class="container mt-3">
        <h1 class="text-center">StudentInsert</h1>
            <div class="row mt-3">
                <div class="col-md-4"></div>
                <div class="col-md-4 border border-dark p-5 bg-primary">

                    <div class="form-group">
                        <label>StudentName</label>
                        <input  class="form-control" type="text" name="studentname" value="">
                    </div>

                    <div class="form-group">
                        <label>School</label>
                        <input  class="form-control" type="text" name="school" value="">
                    </div>

                    <div class="form-group">
                        <label>Present</label>
                        <input  class="form-control" type="text" name="present" value="">
                    </div>

                    <div class="form-group mt-3">
                        <input  class="btn btn-success" type="submit" name="submit" value="submit">
                        <input  class="btn btn-danger" type="submit" name="cancel" value="cancel">
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/studentinsert.blade.php ENDPATH**/ ?>