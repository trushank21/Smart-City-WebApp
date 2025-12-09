<style>
    .zoom-on-hover{
        transition:transform 0.3s ease-in-out;
    }
    .zoom-on-hover:hover{
        transform:scale(1.1);
        z-index: 1;
        position: relative;
    }
</style>

<?php $__env->startSection('content'); ?>

<div class="container">
    <h1 class="text-center text-success mt-3 animate__animated animate__bounceInDown">EDUCATION SHOW<i class='bx bxs-graduation' ></i></h1>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-4 offset-md-4 d-flex ">
            <input class="form-control animate__animated animate__bounceInRight" id="collegeSearch" onkeyup="filtercollege()" type="search" placeholder="Search College...">
        </div>
    </div>

    <div class="row" id="collegeContainer">
        <?php $__currentLoopData = $college; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-4 college-card animate__animated animate__bounceInDown">
            <div class="card shadow zoom-on-hover">
                <div class="card-body text-center">
                    <img src="collegeimages/<?php echo e($col['image']); ?>" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;height:100px;">
                    <h5 class="my-3"><?php echo e($col['collegename']); ?></h5>
                    <p class="text-muted mb-1"><?php echo e($col['address']); ?></p>
                    <p class="text-muted mb-4"><?php echo e($col['city']); ?></p>
                    <div class="d-flex justify-content-center form-group">
                        <!-- <a href="<?php echo e(route('reviewinsert')); ?>" class="btn btn-primary form-control me-1" style="text-decoration: none;">Review</a>
                        <a href="<?php echo e(route('citizen')); ?>" class="btn btn-danger form-control me-1" style="text-decoration: none;">Cancel</a> -->
                    </div>
                </div>
                <div class="card-body shadow text-start bg-light">
                    <p><strong>Pincode:</strong> <?php echo e($col['pincode']); ?></p>
                    <p><strong>ContactNo:</strong> <?php echo e($col['contactno']); ?></p>
                    <p><strong>Emailid:</strong> <?php echo e($col['emailid']); ?></p>
                    <p><strong>CollegeType:</strong> <?php echo e($col['collegetype']); ?></p>
                    <p><strong>TrustName:</strong> <?php echo e($col['trustname']); ?></p>
                    <p><strong>CourseList:</strong> <?php echo e($col['courselist']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
    function filtercollege() {
        let input = document.getElementById("collegeSearch");
        let filter = input.value.toLowerCase();
        let cards = document.getElementsByClassName("college-card");

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let text = card.textContent || card.innerText;
            card.style.display = text.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//citizen/collegeshow.blade.php ENDPATH**/ ?>