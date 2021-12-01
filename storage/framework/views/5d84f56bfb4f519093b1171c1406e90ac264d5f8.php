
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Pizza Size</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('pizzaSize.update', $pizzaSize)); ?>" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">
                              Pizza Size:<input type="text" class="form-control" name="pizzaSize_title" value="<?php echo e(old('pizzaSize_title', $pizzaSize->title)); ?>">
                              Pizza Size: <input type="text" class="form-control" name="pizzaSize_size" value="<?php echo e(old('pizzaSize_size',$pizzaSize->size)); ?>">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">Edit Pizza Size</button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/pizzaSize/edit.blade.php ENDPATH**/ ?>