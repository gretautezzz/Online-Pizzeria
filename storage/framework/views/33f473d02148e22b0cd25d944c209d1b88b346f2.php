
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Product</h1>
                </div>
                <div class="card-body">

                    <form action="<?php echo e(route('product.update', $product)); ?>" method="post" enctype="multipart/form-data">

                        <div class="col-8 form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="product_title" value="<?php echo e(old('product_title',$product->title)); ?>">
                            <label>Amount:</label>
                            <input type="text" class="form-control" name="product_amount" value="<?php echo e(old('product_amount',$product->amount)); ?>">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="product_description" value="<?php echo e(old('product_description',$product->description)); ?>">
                            <label>Price:</label>
                            <input type="text" class="form-control" name="product_price" value="<?php echo e(old('product_price',$product->price)); ?>">
                            <label>Info:</label>
                          <textarea name="product_info"class="form-control" id="" cols="30" rows="10"value="<?php echo e(old('product_price',$product->info)); ?>"></textarea>  
                        </div>

                        <div class="col-4 form-group">
                            <label> Product category: </label>
                            <select class="form-control" name="cat_id">
                            <option value="0">Without cateory</option>
                            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>" <?php if($cat->id == $catId): ?> selected <?php endif; ?>><?php echo e($cat->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                           </div>

                        <div class="col-4 enter-image">
                            <?php if($product->photo): ?>
                            <img src="<?php echo e($product->photo); ?>">
                            <?php else: ?>
                            <img src="<?php echo e(asset('img/no-image.png')); ?>">
                            <?php endif; ?>
                        </div>

                        <div class="col-12 form-group">
                            Photo: <input type="file" class="form-control" name="product_photo">
                            <div class="form-check mt-2">
                                <input type="checkbox" class="form-check-input" name="delete_photo">
                                <label class="form-check-label">
                                    Delete Photo
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-success mt-2">Edit Product</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/product/edit.blade.php ENDPATH**/ ?>