
<?php $__env->startSection('content'); ?>

<?php echo csrf_field(); ?>
    <div class="container">
    <h1 class="text-center mt-3 animate__animated animate__bounceInDown" style="color:darkgreen;">Tax Show<i class='bx bxs-credit-card'></i></h1>
        
        <div class="row animate__animated animate__bounceInDown">
        
          <div class="col-md-1"></div>
            <div class="col-md-11 p-4 mb-4" >
                <div class="table-responsive">
        
                
                <div class="row mb-2">
                    &nbsp;
                    <div class="col-md-3">
                        <div class="form-group">
                            <label></label>
                        <input class="form-control" id="tableSearch" onkeyup="filterTable()" type="search" placeholder="Search.." >
                        </div>
                    </div>
                </div>
               <table class="table table-light table-bordered" id="dataTable">    
               <thead>
               <tr class="table-dark text-light">
                        <th>Taxid</th>
                        <th>regid</th>
                        <th>uname</th>
                        <th>amount</th> 
                        <th>Tax</th> 
                        
                    </tr>
                    </thead>
                <tbody>
                    <?php $__currentLoopData = $tax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                    <tr>
                        <td><?php echo e($tx['taxid']); ?></td>
                        <td><?php echo e($tx['regid']); ?></td>
                        <td><?php echo e($tx['uname']); ?></td>
                        <td><?php echo e($tx['amount']); ?></td>
                      
                        <td class="text-center"><a class="btn btn-danger" href="/ctaxsearch/<?php echo e($tx['taxid']); ?>" style="text-decoration: none;">Pay Tax</a></td>
                 
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
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//citizen/taxshow.blade.php ENDPATH**/ ?>