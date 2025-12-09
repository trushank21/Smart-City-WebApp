<?php 
$uname=session()->get('uname');
$uemail=session()->get('uemail');

?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-light shadow " style="height:60px;">
            
            <a class="navbar-brand ps-3" href="<?php echo route('citizen') ?>" style="color:black;"><h3>CITIZEN<span style="color:green;"> .</span></h3></a>
      
            <button style="color:black;" class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <div class="form-group ms-4">
            <label class="text text-success" style="user-select:none;"><i class='bx bxs-user' ></i><b> <?php echo $uname?></b></label>&nbsp;&nbsp;
            <label class="text text-success" style="user-select:none;"><i class='bx bxs-envelope' ></i><b> <?php echo $uemail?></b></label>
            </div>
            
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
               

                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <!-- <button style="background-color:green;" class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                </div>
            </form>
           
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i style="color:black;" class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo route('cprofileshow') ?>"><i class='bx bxs-user-account'></i> Settings</a></li>
                        <li><a class="dropdown-item" href="<?php echo route('changepassword')?>"><i class='bx bxs-key'></i> Change Password</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo route('mainhome') ?>"><i class='bx bx-log-out'></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>



     <?php /**PATH D:\Laravel\Project1\resources\views/citizen/citizennavbar.blade.php ENDPATH**/ ?>