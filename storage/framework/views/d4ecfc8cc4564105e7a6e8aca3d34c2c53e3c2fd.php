

<?php $__env->startSection('content'); ?>
<h1 class="text-center text-success mt-3">Payment</h1>
<form action="/cpaymentinsert" method="post">
       <?php echo csrf_field(); ?>
        <div class='container'>    
            <div class="row mt-3 ">
            <div class="col-md-3"></div>  
               <div class="col-md-6 bg-light shadow p-4">
                    <div class="form-group">
                        <label>Payment Date</label>
                        <input type="text" class="form-control" name="paydate" value=<?php echo e(date('y-m-d')); ?>  readonly>
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="uname" value=<?php echo e(Session::get('uname')); ?> readonly >
                    </div>
                    <div class="form-group">
                        <label>Order Number</label>
                        <input type="text" class="form-control" name="taxid" value=<?php echo e(Session::get('taxid')); ?> >
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" name="amount" value=<?php echo e(Session::get('amount')); ?>>
                    </div>
                    <div class="form-group">
                        <label>Payment Mode</label>
                        <input type="text" class="form-control" name="paymode" value='Online' readOnly>
                    </div>
                  <div class="form-group mt-3">
                    <button class="btn btn-success w-25 py-3" name="submit" type="submit">Submit</button>
                    <!-- <input class="btn btn-success" type="submit" name="submit" value="submit"> -->
                    <button class="btn btn-danger w-25 py-3" name="cancel" type="submit">Cancel</button>
                    
                </div>
            </div>
        </div>    
        </form>              
<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views//citizen/paymentinsert.blade.php ENDPATH**/ ?>