
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Edit Extra</h1></div>
                <div class="card-body">

                    <form action="<?php echo e(route('extra.update', $extra)); ?>" method="post" enctype="multipart/form-data">
                        
                        <div class="col-4 form-group">
                            <label>Title:</label> 
                            <input type="text" class="form-control" name="extra_title" value="<?php echo e(old('extra_title',$extra->title)); ?>">
                            <label> Price:</label> 
                              <input type="text" class="form-control" name="extra_price_s" value="<?php echo e(old('extra_price_s', $extra->price_s)); ?>">
                               <small>Price for small pizza</small>
                               <input type="text" class="form-control" name="extra_price_m" value="<?php echo e(old('extra_price_m',$extra->price_m)); ?>">
                               <small>Price for medium pizza</small>
                               <input type="text" class="form-control" name="extra_price_l" value="<?php echo e(old('extra_price_l',$extra->price_l)); ?>">
                               <small>Price for large pizza</small>
                             </div>

                            <div class="col-4 enter-image">
                                <?php if($extra->photo): ?>
                                <img src="<?php echo e($extra->photo); ?>"> 
                                <?php else: ?>
                                <img src="<?php echo e(asset('img/no-image.png')); ?>"> 
                                <?php endif; ?>
                            </div>

                            <div class="col-4 form-group">
                                Photo: <input type="file" class="form-control" name="extra_photo">
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" name="delete_photo">
                                    <label class="form-check-label">
                                       Delete Photo
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">Edit Extra</button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/extra/edit.blade.php ENDPATH**/ ?>