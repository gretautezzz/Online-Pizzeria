
<?php $__env->startSection('content'); ?>
<div id="products"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header__wrap">
                        <h1>Products list</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="items">
                        <div class="items">
                            <?php if($product->photo): ?>
                            <img src="<?php echo e($product->photo); ?>">
                            <?php else: ?>
                            <img src="<?php echo e(asset('img/no-image.png')); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="items">
                            <h6> <?php echo e($product->title); ?> </h6>
                        </div>
                        <div class="items">
                            <?php echo e($product->amount); ?>

                            <div> <small>Amount</small> </div>
                        </div>
                        <div class="items">
                            <?php echo e($product->description); ?>

                            <div> <small>Description</small>
                            </div>
                        </div>
                        <div class="items">
                            <?php echo e($product->price); ?>

                            <div> <small>Price</small> </div>

                            <?php if($product->cats->first()): ?>
                            <div class="items__category">
                                <?php echo e($product->cats->first()->title); ?></div>
                                <div> <small>Category</small> </div>
                            
                            <?php endif; ?>

                            <div class="items">
                                <span data-tooltip="<?php echo e($product->info); ?>" data-tooltip-conf="multiline">Info</span>

                            </div>
                            <div class="items__buttons">
                                <form method="POST" action="<?php echo e(route('product.destroy', $product)); ?>">
                                    <a href="<?php echo e(route('product.edit', $product)); ?>" class="btn btn-success m-2">EDIT</a>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/product/index.blade.php ENDPATH**/ ?>