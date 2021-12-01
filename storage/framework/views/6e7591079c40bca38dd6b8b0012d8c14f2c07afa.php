
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>All Layout Categories</h1>
                </div>

                <div class="card-body">
                    <ul class="list-group" id="arrow-buttons">
                        <?php $__currentLoopData = $layoutCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layoutCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <div class="col-12">
                                <div class="index-list">
                                    <div class="index-list__item">
                                        <?php echo e($layoutCat->getCatName->title); ?> <?php echo e($layoutCat->id); ?>

                                    </div>

                                    <div class="index-list__buttons">
                                        <div class="index-list__svg">
                                            <form method="POST" action="<?php echo e(route('layoutCat.up', $layoutCat)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit">
                                                    <svg>
                                                        <use xlink:href="#arrow"></use>
                                                    </svg>
                                                </button>
                                            </form>
                                            <form method="POST" action="<?php echo e(route('layoutCat.down', $layoutCat)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit">
                                                    <svg class="rotate">
                                                        <use xlink:href="#arrow"></use>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                        <form method="POST" action="<?php echo e(route('layoutCat.destroy', $layoutCat)); ?>">
                                            <button type="submit" class="btn btn-danger">Remove</button>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.svg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/layoutCat/index.blade.php ENDPATH**/ ?>