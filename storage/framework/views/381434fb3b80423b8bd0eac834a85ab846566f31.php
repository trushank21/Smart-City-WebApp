
<?php $__env->startSection('content'); ?>

<script>
  function formvalid() {
    var result = false;
    if ((lemailid.innerHTML == "") && (lcontactno.innerHTML == "")) {
      result = true;
    }
    return result;
  }
</script>

<style>
  /* .section-title {
    color: green;
    font-weight: bold;
  } */

  .green-line {
    height: 4px;
    width: 60px;
    background-color: green;
    margin: 0 auto 20px;
  }

  .form-control,
  .form-control:focus {
    background-color: #f8f9fa;
    /* border: 1px solid #ced4da; */
    color: #000;
  }

  .form-control::placeholder {
    color: #6c757d;
  }

  .btn-green {
    background-color: green;
    border: none;
    color: #fff;
  }

  /* .btn-green:hover {
    background-color: #056c05;
  } */

  .contact-info i {
    font-size: 1.2rem;
    color: green;
    margin-right: 10px;
  }

  .contact-box {
    
    /* border-radius: 10px; */
    padding: 30px;
    /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
  }
</style>

<section class="py-5 text-center animate__animated animate__fadeIn  ">
  <div class="container animate__animated animate__fadeInDown">
    <h2 class="section-title ">Contact Us</h2>
    <div class="green-line"></div>
    <p class="lead mb-1">Have questions, feedback, or need help? We'd love to hear from you.</p>

    <div class="row justify-content-center">
      <!-- Contact Form -->
      <div class="col-md-7 shadow animate__animated animate__backInUp  ">
        <div class="contact-box text-start">
          <form action="/ccontact" method="post" onSubmit="return formvalid()">
            <?php echo csrf_field(); ?>
            <!-- <div class="mb-3">
            <i class='bx bxs-calendar'></i><label>Date</label>
              <input type="date" class="form-control" name="contactdate" required />
              <label></label>
            </div> -->
            <div>
            <i class='bx bxs-user' ></i><label>PersonName<span style="color:red;">*</span></label>
              <input type="text" class="form-control" name="personname" placeholder="Your Name" required />
              <label></label>
            </div>
            <!-- <div class="mb-3">
            <i class='bx bxs-phone' ></i><label>ContactNumber<span style="color:red;">*</span></label>
              <input type="text" class="form-control" name="contactno" onkeyup="validateContactNumber(this, document.getElementById('lcontactno'))" placeholder="Contact Number" required />
              <label style="color:red;" id="lcontactno"></label>
            </div>
            <div class="mb-3">
            <i class='bx bxl-gmail' ></i><label>Email<span style="color:red;">*</span></label>
              <input type="email" class="form-control" name="emailid" placeholder="Email" onChange="checkemail(this, lemailid)" required />
              <label style="color:red;" id="lemailid"></label>
            </div> -->

            <div class="row">
                <div class="col-md-4">
                <i class='bx bxs-phone' ></i><label>ContactNumber<span style="color:red;">*</span></label>
              <input type="text" class="form-control" name="contactno" onkeyup="validateContactNumber(this, document.getElementById('lcontactno'))" placeholder="Contact Number" required />
              <label style="color:red;" id="lcontactno"></label>
                </div>
                <div class="col-md-4">
                <i class='bx bxl-gmail' ></i><label>Email<span style="color:red;">*</span></label>
              <input type="email" class="form-control" name="emailid" placeholder="Email" onChange="checkemail(this, lemailid)" required />
              <label style="color:red;" id="lemailid"></label>
                </div>
                <div class="col-md-4">
                <i class='bx bxs-calendar'></i><label>Date</label>
              <input type="date" class="form-control" name="contactdate" required />
              <label></label>
                </div>
            </div>
            <div >
            <i class='bx bxs-detail' ></i><label>Detail</label>
              <textarea class="form-control" rows="5" name="detail" placeholder="Your Message" required></textarea>
              <label></label>
            </div>
            <div class="d-flex gap-1">
              <input class="btn btn-success w-50 " type="submit" name="submit" value="Submit">
              <input class="btn btn-primary " type="reset" value="Reset">
              <a class="btn btn-danger" href="<?php echo route('mainhome')?>">Cancel</a>
            </div>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 text-start mt-5 mt-md-0 bg-dark shadow animate__animated animate__backInRight">
        <div class="contact-box text-start">
          <h5 class="text-success mb-3">Get in Touch</h5>
          <p class="text-white"><i class="bi bi-telephone-fill"></i> +91 97237 12701</p>
          <p class="text-white"><i class="bi bi-envelope-fill"></i> cse.210840131062@gmail.com</p>
          <p class="text-white"><i class="bi bi-geo-alt-fill"></i> WebTechPro, Navsari</p>
          <p class="text-white"><i class="bi bi-clock-fill"></i> Mon - Fri: 9:00 AM to 6:00 PM</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/main/maincontact.blade.php ENDPATH**/ ?>