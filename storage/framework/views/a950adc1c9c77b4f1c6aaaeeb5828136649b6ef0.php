
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Add category to Layout </h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('layoutCat.store')); ?>" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">

                                <label> Select Category :</label>

                                <select class="form-control" name="layout_cat_id">
                                    <option value="0">Select category</option>
                                    <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($cat->id); ?>

                                         <?php if(in_array( $cat->id, $usedCats)): ?>disabled <?php endif; ?>
                                         <?php if(old('layout_cat_id'==$cat->id)): ?>selected <?php endif; ?>
                                        ><?php echo e($cat->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Category</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/back/layoutCat/create.blade.php ENDPATH**/ ?>