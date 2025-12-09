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
    <h1 class="text-center text-success mt-3 animate__animated animate__bounceInDown">CITY SHOW<i class='bx bxs-city' ></i></h1>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-4 offset-md-4">
            <input class="form-control animate__animated animate__bounceInRight" id="citySearch" onkeyup="filtercity()" type="search" placeholder="Search City...">
        </div>
    </div>

    <div class="row" id="cityContainer">
        <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-4 city-card animate__animated animate__bounceInDown">
            <div class="card shadow zoom-on-hover">
                <div class="card-body text-center">
                    <img src="cityimages/<?php echo e($ct['image']); ?>" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;height:100px;">
                    <h5 class="my-3"><?php echo e($ct['cityname']); ?></h5>
                    <p class="text-muted mb-1"><?php echo e($ct['cityshortname']); ?></p>
                    <p class="text-muted mb-4"><?php echo e($ct['pincode']); ?></p>
                    <div class="d-flex justify-content-center form-group">
                        <!-- <a href="<?php echo e(route('reviewinsert')); ?>" class="btn btn-primary form-control me-1" style="text-decoration: none;">Review</a>
                        <a href="<?php echo e(route('citizen')); ?>" class="btn btn-danger form-control me-1" style="text-decoration: none;">Cancel</a> -->
                    </div>
                </div>
                <div class="card-body shadow text-start bg-light">
                    <p><strong>ID:</strong> <?php echo e($ct['id']); ?></p>
                    <p><strong>FamousPlace:</strong> <?php echo e($ct['famousplace']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
    function filtercity() {
        let input = document.getElementById("citySearch");
        let filter = input.value.toLowerCase();
        let cards = document.getElementsByClassName("city-card");

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let text = card.textContent || card.innerText;
            card.style.display = text.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//citizen/cityshow.blade.php ENDPATH**/ ?>