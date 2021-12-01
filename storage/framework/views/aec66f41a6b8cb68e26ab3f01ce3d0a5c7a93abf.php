
<body>
    <div class="hero_area">
        <?php echo $__env->make('front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main role="main" class="cart" class="cart">
            <form action="<?php echo e(route('cart.update')); ?>" method="post">
                <div class="col-sm-12">
                    <ul class="list-group mini-cart">
                        <h2>My Cart</h2>
                        <?php $__empty_1 = true; $__currentLoopData = $pageData->cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="list-group-item">
                            <div class="mini-cart-product">
                                <img src="<?php echo e($cartProduct->photo); ?>" alt="">
                                <h5><?php echo e($cartProduct->title); ?></h5>
                                <h6> <?php echo e($cartProduct->price); ?> Eur x <input type="text" name="product[<?php echo e($cartProduct->id); ?>]" value="<?php echo e($cartProduct->count); ?>"> </h6>
                                <button type="submit" name="delete" value="<?php echo e($cartProduct->id); ?>">
                                    <svg>
                                        <use xlink:href="#bin"></use>
                                    </svg>
                                </button>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li class="list-group-item"> Cart is empty</li>
                        <?php endif; ?>
                        <?php if($pageData->cartTotal): ?>
                        <li class="list-group-item">
                            <h4>Total: <?php echo e($pageData->cartTotal); ?> EUR</h4>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="container mt-5">
                    <button type="submit" class="btn btn-warning"> Update Cart</button>
                    <a href="<?php echo e(route('checkout.phoneLogin')); ?>" class="btn btn-danger">Checkout</a>
                </div>
                <?php echo csrf_field(); ?>
            </form>
        </main>
    </div>
    <?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
</body>
</html>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/front/cart/view.blade.php ENDPATH**/ ?>