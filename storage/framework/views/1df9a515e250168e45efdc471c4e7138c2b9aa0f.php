
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Create Product</h1></div>
                <div class="card-body">
                    <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-4 form-group">
                            <label> Title:</label> 
                              <input type="text" class="form-control" name="product_title" value="<?php echo e(old('product_title')); ?>">
                              <small>Product title</small>
                            </div>
                            <div class="col-4 form-group">
                                <label>Amount:</label> 
                                <input type="text" class="form-control" name="product_amount" value="<?php echo e(old('product_amount')); ?>">
                                <label>Description:</label> 
                                <input type="textarea" class="form-control" name="product_description" value="<?php echo e(old('product_description')); ?>">
                                 <label>Price:</label> 
                                 <input type="text" class="form-control" name="product_price" value="<?php echo e(old('product_price')); ?>">
                                 <label>Info:</label> 
                                 <textarea name="product_info"class="form-control" id="" cols="30" rows="10"value="<?php echo e(old('product_price')); ?>"></textarea> 
                              </div>
                            
                            <div class="col-4 form-group">
                                <label> Product category: </label>
                                <select class="form-control" name="cat_id">
                                <option value="0">Select category</option>
                                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                               </div>
                               <div class="col-12 form-group">
                             <label>  Product photo: </label> 
                                <input type="file" class="form-control" name="product_photo">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Product</button>
                            </div>
                        </div>
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/product/create.blade.php ENDPATH**/ ?>