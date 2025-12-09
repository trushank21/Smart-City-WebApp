
<?php $__env->startSection('content'); ?>

<?php echo csrf_field(); ?>
    <div class="container ">
    <h1 class="text-center mt-3 animate__animated animate__bounceInDown" style="color:darkgreen;">Tax list<i class='bx bxs-credit-card' ></i></h1>
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
        
                
                
               <table class="table table-light table-bordered table-hover  animate__animated animate__bounceInDown" id="dataTable">    
               <thead>
               <tr>
                        <th>regid</th>
                        <th>udate</th>
                        <th>uname</th>
                        <th>uemail</th>
                        <th>usertype</th>
                        <th>gender</th>
                        <th>Send tax</th>
                        
                    </tr>
                    </thead>
                <tbody>
                    <?php $__currentLoopData = $register; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($reg['regid']); ?></td>
                        <td><?php echo e($reg['udate']); ?></td>
                        <td><?php echo e($reg['uname']); ?></td>
                        <td><?php echo e($reg['uemail']); ?></td>
                        <td><?php echo e($reg['usertype']); ?></td>
                        <td><?php echo e($reg['gender']); ?></td>
                        <td class="text-center"><a class="btn btn-danger" href="/cregistersearch/<?php echo e($reg['regid']); ?>" style="text-decoration: none;">Send Tax</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
               </table>
               </div>
               <a class="btn btn-primary" href="<?php echo route('ctaxcomplete') ?>">Show Tax Status</a>
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
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/taxlist.blade.php ENDPATH**/ ?>