


<?php $__env->startSection('content'); ?>

<?php echo csrf_field(); ?>
    <div class="container">
    <h1 class="text-center mt-3 animate__animated animate__bounceInDown" style="color:darkgreen;">PROJECT SHOW<i class='bx bx-cog bx' ></i></h1>
        
        <div class="row ">
        
          <div class="col-md-1"></div>
            <div class="col-md-10 p-4 mb-4" >
                <div class="table-responsive animate__animated animate__bounceInDown">
        
                
                <div class="row mb-2">
                    &nbsp;
                    <div class="col-md-3">
                        <div class="form-group">
                            <label></label>
                        <input class="form-control animate__animated animate__bounceInRight" id="tableSearch" onkeyup="filterTable()" type="search" placeholder="Search.." >
                        </div>
                    </div>
                </div>
               <table class="table table-light table-bordered animate__animated animate__bounceInDown" id="dataTable">    
               <thead>
               <tr>
               <th>Update</th>
               <th>Delete</th>
               <th>ID</th>
                        <th>ProjectName</th>
                        <th>ProjectType</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>Description</th>
                        <th>ProjectHead</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>HeadContact</th>
                        <th>HeadEmailID</th>
                        
                    </tr>
                    </thead>
                <tbody>
                    <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td class="text-center"><a class="btn btn-warning" href="/cprojectsearch/<?php echo e($pro['id']); ?>" style="text-decoration: none;">Update</a></td>
                    <td class="text-center"><a class="btn btn-primary" href="/cprojectdelete/<?php echo e($pro['id']); ?>" style="text-decoration: none;">Delete</a></td>
                    <td><?php echo e($pro['id']); ?></td>
                        <td><?php echo e($pro['projectname']); ?></td>
                        <td><?php echo e($pro['projecttype']); ?></td>
                        <td><?php echo e($pro['startdate']); ?></td>
                        <td><?php echo e($pro['enddate']); ?></td>
                        <td><?php echo e($pro['description']); ?></td>
                        <td><?php echo e($pro['projecthead']); ?></td>
                        <td><?php echo e($pro['amount']); ?></td>
                        <td><?php echo e($pro['status']); ?></td>
                        <td><?php echo e($pro['headcontactno']); ?></td>
                        <td><?php echo e($pro['heademailid']); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tr>
                <td colspan="13" align="left">
               <a class="btn btn-secondary" style="text-decoration:none;width:150px;margin-left:10px;" href="<?php echo route('projectinsert') ?>">New</a>
               </td>   
            </tr>
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
<?php echo $__env->make('admin\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/admin/projectlist.blade.php ENDPATH**/ ?>