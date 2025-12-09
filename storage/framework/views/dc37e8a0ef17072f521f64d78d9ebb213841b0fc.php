




<?php $__env->startSection('content'); ?>

<?php echo csrf_field(); ?>
    <div class="container">
    <h1 class="text-center mt-3 animate__animated animate__bounceInDown" style="color:darkgreen;">REVIEW SHOW<i class='bx bxs-comment-add'></i></h1>
    <div class="row mb-2">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label></label>
                        <input class="form-control animate__animated animate__bounceInDown" id="tableSearch" onkeyup="filterTable()" type="search" placeholder="Search.." >
                        </div>
                    </div>
                </div>
        <div class="row">
        
          <!-- <div class="col-md-1"></div> -->
            <div class="col-md-12 p-4 mb-4" >
                <div class="table-responsive animate__animated animate__bounceInDown">
        
                
               
               <table class="table table-light table-bordered animate__animated animate__bounceInDown" id="dataTable">    
               <thead>
               <tr>
               <th>id</th>
                        <th>reviewdate</th>
                        <th>regid</th>
                        <th>review</th>
                        <th>rating</th>
                        <th>reviewfor</th>
                        
                    </tr>
                    </thead>
                <tbody>
                <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($rev['id']); ?></td>
                        <td><?php echo e($rev['reviewdate']); ?></td>
                        <td><?php echo e($rev['regid']); ?></td>
                        <td><?php echo e($rev['review']); ?></td>
                        <td><?php echo e($rev['rating']); ?></td>
                        <td><?php echo e($rev['reviewfor']); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
               </table>
               </div>
            </div>
        </div>
        
    </div>
    
    <script>
        function filterTable() {
            let input = document.getElementById("tableSearch");
            let filter = input.value.toLowerCase();
            let table = document.getElementById("dataTable");
            let rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) { // Start from 1 to skip table header
                let cells = rows[i].getElementsByTagName("td");
                let rowMatch = false;
                for (let j = 0; j < cells.length; j++) {
                    if (cells[j]) {
                        let cellText = cells[j].textContent || cells[j].innerText;
                        if (cellText.toLowerCase().indexOf(filter) > -1) {
                            rowMatch = true;
                            break;
                        }
                    }
                }
                rows[i].style.display = rowMatch ? "" : "none";
            }
        }
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/reviewshow.blade.php ENDPATH**/ ?>