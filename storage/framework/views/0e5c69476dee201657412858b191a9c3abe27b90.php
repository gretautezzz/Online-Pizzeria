
<body>
    <div class="hero_area">
        <?php echo $__env->make('front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main role="main" class="cart">
            <form action="<?php echo e(route('checkout.doPhoneLogin')); ?>" class="cart" method="POST">
                <div class="container mt-5">
                    <h1>Enter Phone</h1>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="m-2" type="text" name="phone_login">
                            <button type="submit" class="btn btn-warning"> Next</button>
                        </div>
                    </div>
                    <?php echo csrf_field(); ?>
            </form>
        </main>
    </div>
    <?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/front/checkout/phone_login.blade.php ENDPATH**/ ?>