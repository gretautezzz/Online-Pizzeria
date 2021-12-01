<?php if(!isset($pageData->hideMiniCart)): ?>
<ul class="list-group mini-cart">
    <?php $__empty_1 = true; $__currentLoopData = $pageData->cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="list-group-item">
        <div class="mini-cart-product">
            <img src="<?php echo e($cartProduct->photo); ?>" alt="">
            <h5><?php echo e($cartProduct->title); ?></h5>
            <h6><?php echo e($cartProduct->price); ?> </h6>
            <h6>x <?php echo e($cartProduct->count); ?> </h6>
            <form action="<?php echo e(route('cart.remove', $cartProduct)); ?>" method="POST">
                <button type="submit">
                    <svg>
                        <use xlink:href="#bin"></use>
                    </svg>
                </button>
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="list-group-item"> Cart is empty</div>
    <?php endif; ?>
    <li class="list-group-item">
        <h4>Total: <?php echo e($pageData->cartTotal); ?> Eur</h4>
    </li>
</ul>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dodo\resources\views/front/cart/mini.blade.php ENDPATH**/ ?>