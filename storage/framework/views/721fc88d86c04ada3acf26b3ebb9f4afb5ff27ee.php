

<?php $__env->startSection('content'); ?>
<?php if(session('message')): ?>
<div class="alert alert-success" role="alert"   id="alertSuccessHide">
<?php echo e(session('message')); ?>

</div>
<?php endif; ?>
<div class="container">
    <?php if(session('error')): ?>
        <div class="alert alert-danger" role="alert"   id="alertSuccessHide">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>
<section class="section">
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <div class="title-block">
                    <h3 class="title"> Add Items To Store </h3>
                    <hr>
                </div>
                <form action="/storeItemDetais" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label class="control-label">Item Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control boxed" required name="item_name" placeholder="Enter Your New Password........" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Item Description <span style="color: red">*</span></label>
                        
                        <textarea name="" id="" class="form-control boxed" name="item_description"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Item Image <span style="color: red">*</span></label>
                        <input type="file" class="form-control boxed" required name="item_image"  placeholder="Enter Your Confirm Password........" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Item Price <span style="color: red">*</span></label>
                        <input type="number" class="form-control boxed" required name="item_price"  placeholder="Enter Your Confirm Password........" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Item Discount (Optional)</label>
                        <input type="number" class="form-control boxed" name="item_discount"  placeholder="Enter Your Confirm Password........" required>
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Add Details" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SHANAKA\Desktop\Final_Hydroponic_Farm\resources\views/admin/items/addItem.blade.php ENDPATH**/ ?>