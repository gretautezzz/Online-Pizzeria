
<?php $__env->startSection('content'); ?>
<div id="extras"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header__wrap">
                        <h1>Extras list</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $extras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <div class="items">
                            <div class="items__extra">
                                <?php if($extra->photo): ?>
                                <img src="<?php echo e($extra->photo); ?>">
                                <?php else: ?>
                                <img src="<?php echo e(asset('img/no-image.png')); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="items__extra">
                              <h6> <?php echo e($extra->title); ?>  </h6> 
                            </div>
                            <div class="items__extra">
                             <small>Price S</small> <?php echo e($extra->price_s); ?> 
                            </div>
                            <div class="items__extra">
                             <small>Price M</small> <?php echo e($extra->price_m); ?> 
                            </div>  
                            <div class="items__extra">
                              <small>Price L</small> <?php echo e($extra->price_l); ?> 
                            </div>
                            <div class="items__buttons">
                                <form method="POST" action="<?php echo e(route('extra.destroy', $extra)); ?>">
                                    <a href="<?php echo e(route('extra.edit', $extra)); ?>" class="btn btn-success m-2">EDIT</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/extra/index.blade.php ENDPATH**/ ?>