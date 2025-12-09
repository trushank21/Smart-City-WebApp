<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle2.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
        
<?php include("layouts/header.php") ?>

    
    <?php include("layouts/navbar.php") ?>


        <div class="row bg-primary ">
       
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-1 mb-1">
                <h2 class="text-center">Login Form</h2>
                
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="name" value="">
                </div>
            
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" value="">
                </div>

                <div class="form-group">
                    <label><input type="checkbox">Remember me</label>
                </div>

                <div class="form-group mt-2 mb-3">
            <button class="btn btn-success w-75" type="submit">Submit</button>
            <button class="btn btn-danger " type="submit">Cancel</button>
            </div>
                    
                
            
               
            
            
            
               
            </div>
        </div>
        <?php include("layouts/footer.php") ?>
    </div>
</body>
</html><?php /**PATH D:\Laravel\Project1\resources\views/login.blade.php ENDPATH**/ ?>