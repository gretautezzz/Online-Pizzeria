
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header_wrap">
                        <h1>All categories</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12">
                                <div class="index-list">
                                    <div class="index-list__item">
                                        <?php echo e($cat->title); ?>

                                    </div>
                                    <div class="index-list__buttons">
                                        <form method="POST" action="<?php echo e(route('cat.destroy', $cat)); ?>">
                                        <a href="<?php echo e(route('cat.edit', $cat)); ?>" class="btn btn-success m-2">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/cat/index.blade.php ENDPATH**/ ?>