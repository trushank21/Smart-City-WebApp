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
    <h1 class="text-center text-success mt-3 animate__animated animate__bounceInDown">HOSPITAL SHOW<i class='bx bxs-shield-plus' ></i></h1>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-4 offset-md-4 ">
            <input class="form-control animate__animated animate__bounceInRight" id="hospitalSearch" onkeyup="filterhospital()" type="search" placeholder="Search Hospital...">
        </div>
    </div>

    <div class="row" id="hospitalContainer ">
        <?php $__currentLoopData = $hospital; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-4 hospital-card animate__animated animate__bounceInDown">
            <div class="card shadow zoom-on-hover ">
                <div class="card-body text-center ">
                    <img src="hospitalimages/<?php echo e($hos['image']); ?>" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;height:100px;">
                    <h5 class="my-3"><?php echo e($hos['hospitalname']); ?></h5>
                    <p class="text-muted mb-1"><?php echo e($hos['location']); ?></p>
                    <p class="text-muted mb-4"><?php echo e($hos['headname']); ?></p>
                    <div class="d-flex justify-content-center form-group">
                    <a href="/chospitalsearch/<?php echo e($hos['id']); ?>" class="btn btn-success form-control me-1" style="text-decoration: none;">Update</a>
              <a href="/chospitaldelete/<?php echo e($hos['id']); ?>" class="btn btn-secondary form-control me-1" style="text-decoration: none;">Delete</a>
              <a href="<?php echo route('hospitalinsert') ?>" class="btn btn-primary form-control me-1" style="text-decoration: none;">New</a>
              <a href="<?php echo route('admin') ?>" class="btn btn-danger form-control" style="text-decoration: none;">Cancel</a>
                    </div>
                </div>
                <div class="card-body shadow text-start bg-light">
                    <p><strong>Stationid:</strong> <?php echo e($hos['id']); ?></p>
                    <p><strong>ContactNo:</strong> <?php echo e($hos['contactno']); ?></p>
                    <p><strong>Emailid:</strong> <?php echo e($hos['emailid']); ?></p>
                    <p><strong>Description:</strong> <?php echo e($hos['description']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
    function filterhospital() {
        let input = document.getElementById("hospitalSearch");
        let filter = input.value.toLowerCase();
        let cards = document.getElementsByClassName("hospital-card");

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let text = card.textContent || card.innerText;
            card.style.display = text.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/hospitallist.blade.php ENDPATH**/ ?>