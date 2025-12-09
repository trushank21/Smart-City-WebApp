
<?php $__env->startSection('content'); ?>

<!-- <script>
    
  function formvalid()
  {
    var result=false;
    if((luname.innerHTML=="") && (lupassword.innerHTML=="") && (luemail.innerHTML=="") )
    {
      result=true;
      
    }
    return result;
  }
</script>

<form action="cregisterinsert" method="post" onSubmit="return formvalid()">
    <?php echo csrf_field(); ?>
<div class="container">
<h2 class="text-center mt-3" style="color:darkgreen;">REGISTRATION PAGE </h2>
<div class="row  m-3 ">
       
       <div class="col-md-3"></div>
       <div class="col-md-6 p-4  mb-3 bg-light" style="border-left: 5px solid rgb(50, 177, 84);border-left-style:dashed;">
          
          
     
       
           <div class="form-group">
           <i class='bx bxs-user-plus' ></i>
               <label>Username</label>
               <input class="form-control" type="text" name="uname" onChange="onlyalpha(this,luname)" value="">
               <label  style="color:red;" id="luname"></label>
           </div>
       
           <div class="form-group">
           <i class='bx bxs-lock-alt' ></i>
               <label>Password</label>
               <input class="form-control" type="password" onChange="checklen(this,lupassword)" name="upassword" value="">
               <label style="color:red;" id="lupassword"></label>
               <label></label>
           </div>

    

           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <i class='bx bx-calendar'></i>
                    <label>Register Date</label>
                    <input class="form-control" type="date" name="udate" value="">
                    <label></label>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <i class='bx bxs-envelope' ></i>
                <label>Email</label>
                <input class="form-control" type="email" onChange="checkemail(this,luemail)" name="uemail" value="">
                <label style="color:red;"  id="luemail"></label>
                </div>
                </div>
           </div>
       
           

         
         <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <i class='bx bxs-user-account'></i>
               <label>User Type</label>                   
               <input type="text" class="form-control" name="usertype" value="citizen" readonly>
               <label></label>
           </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <i class='bx bx-male-female' ></i>
               <label>Gender</label>
               <div class="form-control">
               <input type="radio" name="gender" value="male">Male
               <input type="radio" name="gender" value="female">Female
               <label></label>
               </div>    
           </div>
            </div>
         </div>

           
          

           <div class="form-group mt-2 text-center">
      
       <input type="submit" class="btn btn-success w-75" name="submit" value="submit">
       
       <input type="submit" class="btn btn-danger" name="cancel" value="cancel">
       </div>

       <div class="box text-center mt-2" >
       
       </div>

       </div>
   </div>
   </div>
   </form> -->


<!-- ---------------------------------------------------------------------------- -->


<!-- -------------------------------------------- -->
<script>
    
  function formvalid()
  {
    var result=false;
    if((luname.innerHTML=="") && (lupassword.innerHTML=="") && (luemail.innerHTML=="") )
    {
      result=true;
      
    }
    return result;
  }
</script>
<section class="animate__animated animate__fadeInLeft" style="background-color:white;">
  <div class="container  h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 shadow">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <!-- <img   src="https://i.pinimg.com/736x/b9/0f/82/b90f8212e77c64fd7938c5fed1cd5fa8.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" /> -->
                <video class="d-block w-100" autoplay muted loop playsinline>
        <source src="/videos/pppp.mp4" type="video/mp4">
      </video>
            
              </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="cregisterinsert" method="post" onSubmit="return formvalid()">
                <?php echo csrf_field(); ?>
                  <div class="d-flex align-items-center mb-1 pb-1">
                   
                    <span class="h1 fw-bold mb-0">Hello!</span>
                  </div>

                  <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-user' ></i><label class="form-label" for="form2Example17">Username<span style="color:red;">*</span></label>
                    <input type="text" name="uname" class="form-control form-control-lg" onChange="onlyalpha(this,luname)" placeholder="Enter username" autofocus="true" />
                    <label  style="color:red;" id="luname"></label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-1">
                  <i class='bx bxs-lock-alt' ></i><label class="form-label" for="form2Example27">Password<span style="color:red;">*</span></label>
                    <input type="password" name="upassword" class="form-control form-control-lg" onChange="checklen(this,lupassword)" placeholder="Enter password" />
                    
                    <label style="color:red;" id="lupassword"></label>
                  </div>
                  
                  
                  <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <i class='bx bx-calendar'></i></i><label class="form-label" for="form2Example17">Date</label>
                    <input class="form-control form-control-lg" type="date" name="udate" value="">
                    <label></label>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <i class='bx bxs-envelope' ></i><label class="form-label" for="form2Example17">Email<span style="color:red;">*</span></label>
                <input class="form-control form-control-lg" type="email" onChange="checkemail(this,luemail)" name="uemail" placeholder="Enter email" value="">
                <label style="color:red;"  id="luemail"></label>
                </div>
                </div>
           </div>


                  <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <i class='bx bx-male-female' ></i><label class="form-label" for="form2Example17">Gender</label>
                    <div class="form-control form-control-lg">
                    <input type="radio" name="gender" value="male">Male
                  <input type="radio" name="gender" value="female">Female
                  </div>
                  <label></label>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <i class='bx bxs-user-check' ></i><label class="form-label" for="form2Example17">Usertype</label>
                <input type="text" class="form-control form-control-lg" name="usertype" value="citizen" readonly>
                <label></label>
                </div>
                </div>
           </div>
                
              

                  <div class="mt-3 text-center  ">
                    <!-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button> -->
                    <input class="btn btn-dark  btn-lg btn-block w-75" type="submit" name="submit" value="submit">
                    <a class="btn btn-danger  btn-lg btn-block " href="<?php echo route ('mainhome') ?>">Cancel</a>
                  </div>

                  
                  <p class="mt-1 pb-lg-2 text-center " style="color: #393f81;">Already have an account? <a class="text-success" href="<?php echo route('mainlogin')?>"
                      style="color: #393f81;">Login here</a></p>
                      
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




   <?php $__env->stopSection(); ?>
<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/mainregistration.blade.php ENDPATH**/ ?>