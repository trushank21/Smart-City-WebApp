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
    <h1 class="text-center text-success mt-3 animate__animated animate__bounceInDown">COMMITTEE LIST<i class='bx bxs-user-detail'></i></h1>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-4 offset-md-4">
            <input class="form-control animate__animated animate__bounceInRight" id="memberSearch" onkeyup="filtermember()" type="search" placeholder="Search member...">
        </div>
    </div>

    <div class="row" id="memberContainer">
        <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-4 member-card animate__animated animate__bounceInDown">
            <div class="card shadow zoom-on-hover">
                <div class="card-body text-center">
                    <img src="memberimages/<?php echo e($mem['image']); ?>" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;height:100px;">
                    <h5 class="my-3"><?php echo e($mem['membername']); ?></h5>
                    <p class="text-muted mb-1"><?php echo e($mem['emailid']); ?></p>
                    <p class="text-muted mb-4"><?php echo e($mem['department']); ?></p>
                    <div class="d-flex justify-content-center form-group">
                    <a href="/cmembersearch/<?php echo e($mem['id']); ?>" class="btn btn-success form-control me-1" style="text-decoration: none;">Update</a>
              <a href="/cmemberdelete/<?php echo e($mem['id']); ?>" class="btn btn-secondary form-control me-1" style="text-decoration: none;">Delete</a>
              <a href="<?php echo route('memberinsert') ?>" class="btn btn-primary form-control me-1" style="text-decoration: none;">New</a>
              <a href="<?php echo route('admin') ?>" class="btn btn-danger form-control" style="text-decoration: none;">Cancel</a>
                    </div>
                </div>
                <div class="card-body shadow text-start bg-light">
                    <p><strong>Designation:</strong> <?php echo e($mem['designation']); ?></p>
                    <p><strong>Startdate:</strong> <?php echo e($mem['startdate']); ?></p>
                    <p><strong>Responsibilities:</strong> <?php echo e($mem['responsibilities']); ?></p>
                    <p><strong>Contactno:</strong> <?php echo e($mem['contactno']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
    function filtermember() {
        let input = document.getElementById("memberSearch");
        let filter = input.value.toLowerCase();
        let cards = document.getElementsByClassName("member-card");

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let text = card.textContent || card.innerText;
            card.style.display = text.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/memberlist.blade.php ENDPATH**/ ?>