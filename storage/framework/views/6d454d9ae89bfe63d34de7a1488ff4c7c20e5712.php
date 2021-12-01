
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Add product to Layout </h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('layoutProduct.store')); ?>" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">

                                <label> Select Product:</label>

                                <select class="form-control" name="layout_product_id">
                                    <option value="0">Select productegory</option>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($product->id); ?>

                                         <?php if(in_array( $product->id, $usedProducts)): ?>disabled <?php endif; ?>
                                         <?php if(old('layout_product_id'==$product->id)): ?>selected <?php endif; ?>
                                        ><?php echo e($product->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Product layout</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/layoutProduct/create.blade.php ENDPATH**/ ?>