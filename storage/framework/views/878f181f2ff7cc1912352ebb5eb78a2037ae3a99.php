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
    <h1 class="text-center text-success mt-3 animate__animated animate__bounceInDown">POLICESTATION LIST<i class='bx bx-shield-quarter' ></i></h1>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-4 offset-md-4">
            <input class="form-control animate__animated animate__bounceInRight" id="policestationSearch" onkeyup="filterpolicestation()" type="search" placeholder="Search PoliceStation...">
        </div>
    </div>

    <div class="row" id="policestationContainer">
        <?php $__currentLoopData = $policestation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-4 policestation-card animate__animated animate__bounceInDown">
            <div class="card shadow zoom-on-hover">
                <div class="card-body text-center">
                    <img src="policestationimages/<?php echo e($pol['image']); ?>" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;height:100px;">
                    <h5 class="my-3"><?php echo e($pol['policestationname']); ?></h5>
                    <p class="text-muted mb-1"><?php echo e($pol['location']); ?></p>
                    <p class="text-muted mb-4"><?php echo e($pol['headname']); ?></p>
                    <div class="d-flex justify-content-center form-group">
                    <a href="/cpolicestationsearch/<?php echo e($pol['id']); ?>" class="btn btn-success form-control me-1" style="text-decoration: none;">Update</a>
              <a href="/cpolicestationdelete/<?php echo e($pol['id']); ?>" class="btn btn-secondary form-control me-1" style="text-decoration: none;">Delete</a>
              <a href="<?php echo route('policestationinsert') ?>" class="btn btn-primary form-control me-1" style="text-decoration: none;">New</a>
              <a href="<?php echo route('admin') ?>" class="btn btn-danger form-control" style="text-decoration: none;">Cancel</a>
                    </div>
                </div>
                <div class="card-body shadow text-start bg-light">
                    <p><strong>PoliceStationid:</strong> <?php echo e($pol['id']); ?></p>
                    <p><strong>ContactNo:</strong> <?php echo e($pol['contactno']); ?></p>
                    <p><strong>Emailid:</strong> <?php echo e($pol['emailid']); ?></p>
                    <p><strong>Description:</strong> <?php echo e($pol['description']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
    function filterpolicestation() {
        let input = document.getElementById("policestationSearch");
        let filter = input.value.toLowerCase();
        let cards = document.getElementsByClassName("policestation-card");

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let text = card.textContent || card.innerText;
            card.style.display = text.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/policestationlist.blade.php ENDPATH**/ ?>