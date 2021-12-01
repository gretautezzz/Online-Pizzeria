
<?php $__env->startSection('content'); ?>
<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <ul class="list-group">
                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <a class="links-list" href="<?php echo e(route('layoutProduct.index', $cat)); ?>"><?php echo e($cat->title); ?></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header"> 
                <h1> <?php echo e($header); ?> </h1>
            </div>

            <div class="card-body">
                <ul class="list-group" id="arrow-buttons">
                    <?php $__empty_1 = true; $__currentLoopData = $layoutProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layoutProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="list-group-item">
                        <div class="col-12">
                            <div class="index-list">
                                <div class="index-list__item">
                                    <?php echo e($layoutProduct->getProduct->title); ?>

                                </div>
                                <div class="index-list">
                                    <?php if($layoutProduct->getProduct->photo): ?>
                                    <img src="<?php echo e($layoutProduct->getProduct->photo); ?>">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('img/no-image.png')); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="index-list__buttons">
                                    <div class="index-list__svg">
                                        <form method="POST" action="<?php echo e(route('layoutProduct.up', [$layoutProduct,$catNow])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit">
                                                <svg>
                                                    <use xlink:href="#arrow"></use>
                                                </svg>
                                            </button>
                                        </form>
                                        <form method="POST" action="<?php echo e(route('layoutProduct.down', [$layoutProduct,$catNow])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit">
                                                <svg class="rotate">
                                                    <use xlink:href="#arrow"></use>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    <form method="POST" action="<?php echo e(route('layoutProduct.destroy', $layoutProduct)); ?>">
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p> <?php echo e($message); ?></p>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<?php echo $__env->make('layouts.svg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/layoutProduct/index.blade.php ENDPATH**/ ?>