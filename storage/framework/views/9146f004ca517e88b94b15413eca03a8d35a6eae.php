
<body>
    <div class="hero_area">
        <?php echo $__env->make('front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main role="main">
            <form action="<?php echo e(route('checkout.storeClient', $client)); ?>" method="post" class="cart">
                <div class="container mt-4">
                    <h1><?php echo e($client->phone); ?></h1>
                </div>
                <div class="row">
                    <div class="container mt-4">
                        <label>Name: </label>
                        <input type="text" name="client_name">
                    <label>Address: </label>
                    <input type="text" name="client_address">
                </div>
               </div>
                <div class="container mt-4">
                    <button type="submit" class="btn btn-warning"> Next</button>
                </div>
               
            </form>
        </main>
    </div>
    <?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/front/checkout/create_client.blade.php ENDPATH**/ ?>