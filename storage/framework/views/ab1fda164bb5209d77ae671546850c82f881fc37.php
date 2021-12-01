<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <title>Papito pizza</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/front.js')); ?>" defer></script>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- Styles -->
    <link href="<?php echo e(asset('css/front.css')); ?>" rel="stylesheet">

    
</head>
<?php echo $__env->make('layouts.svg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\dodo\resources\views/layouts/front_app.blade.php ENDPATH**/ ?>