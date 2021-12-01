

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Create Tag</h1></div>
                <div class="card-body">
                    <form action="<?php echo e(route('tag.store')); ?>" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">
                               Tag: <input type="text" class="form-control" name="tag_title" value="<?php echo e(old('tag_title')); ?>">
                               
                            </div>
                        
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Tag</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/tag/create.blade.php ENDPATH**/ ?>