



<?php $__env->startSection('content'); ?>

<?php echo csrf_field(); ?>
    <div class="container">

    <h1 class="text-center mt-3 animate__animated animate__bounceInDown" style="color:darkgreen;">COMPLAIN LIST<i class='bx bxs-report'></i></h1>   
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
        
          <div class="col-md-1"></div>
            <div class="col-md-10 p-4 mb-4" >
                <div class="table-responsive animate__animated animate__bounceInDown">
        
                
                
               <table class="table table-light table-bordered animate__animated animate__bounceInDown" id="dataTable">    
               <thead>
               <tr>
                     
               <th>ID</th>
                        <th>complaindate</th>
                        <th>regid</th>
                        <th class="bg-danger text-light">Complain</th>
                        <th colspan="2" class="bg-success text-light">Solution</th>
                        
                    </tr>
                    </thead>
                <tbody>
                <?php $__currentLoopData = $complain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($comp['id']); ?></td>
                        <td><?php echo e($comp['complaindate']); ?></td>
                        <td><?php echo e($comp['regid']); ?></td>
                        <td><?php echo e($comp['complain']); ?></td>
                        <td><?php echo e($comp['solution']); ?></td>
                        <td class="text-center"><a class="btn btn-success" href="/ccomplainsearch/<?php echo e($comp['id']); ?>" style="text-decoration: none;">Give Solution</a></td>
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
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//admin/complainlist.blade.php ENDPATH**/ ?>