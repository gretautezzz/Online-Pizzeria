
<body>
    <div class="hero_area">
        <?php echo $__env->make('front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- slider section -->
        <section class="slider_section">
            <div class="slider_container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h2>
                                            Welcome to the most
                                            delicious <br>
                                            <h1>Papito pizza</h1>
                                        </h2>
                                        <p>
                                            At Papito Pizza, we don’t just make pizza. We make people happy. Papito Pizza was built on the belief that pizza night should be special, and we carry that belief into everything we do. With more than 55 years of experience under our belts, we understand how to best serve our customers through tried and true service principles: We create food we’re proud to serve and deliver it fast, with a smile.
                                        </p>
                                        <a href="">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="img-box">
                                        <img src="<?php echo e(asset('images/pizzaman.png')); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>
    <!-- end hero area -->

    <!-- shop section -->
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Products
                </h2>
            </div>
            <div class="row">

                
                <?php $__empty_1 = true; $__currentLoopData = $pageData->layout; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catWithProducts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-sm-12">
                    <h2> <span class="badge badge-danger"><?php echo e($catWithProducts->cat->title); ?></span></h2>
                </div>
                

                
                <?php $__empty_2 = true; $__currentLoopData = $catWithProducts->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="<?php echo e($product->photo); ?>" alt="<?php echo e($product->title); ?>">
                            </div>
                            <div class="detail-box">
                                <div class="new">
                                    <?php echo e($product->title); ?>

                                </div>
                                <h6>
                                    Price
                                    <span>
                                        <?php echo e($product->price); ?> Eur
                                    </span>
                                </h6>
                            </div>
                        </a>
                        <form action="<?php echo e(route('cart.add',$product)); ?>" method="POST">
                            <button type="submit" class="btn btn-light">Add to Cart</button>
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                <h4 class="m-5"> This category has no products</h4>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h4 class="m-5"> Products layout is empty</h4>
                <?php endif; ?>
                
                <div class="btn-box">
                    <a href="">
                        View All Products
                    </a>
                </div>
            </div>
    </section>
    <!-- end shop section -->

    <!-- why section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Why Order From Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <svg>
                                <use xlink:href="#fast"></use>
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Fast Delivery
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <svg>
                                <use xlink:href="#free"></use>
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Free Delivery
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <svg>
                                <use xlink:href="#quality"></use>
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Best Quality
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->

    <!-- contact section -->
    <section class="contact_section ">
        <div class="container px-0">
            <div class="heading_container heading_center">
                <h2 class="">
                    Contact Us
                </h2>
            </div>
        </div>
        <div class="container container-bg">
            <div class="form">
                <form action="#">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" placeholder="Phone" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section  layout_padding2-top">
        <div class="social_container">
            <div class="social_box">
                <a href="">
                    <svg>
                        <use xlink:href="#facebook"></use>
                    </svg> </a>
                <a href="">
                    <svg>
                        <use xlink:href="#twitter"></use>
                    </svg></a>
                <a href="">
                    <svg>
                        <use xlink:href="#instagram"></use>
                    </svg></a>
                <a href="">
                    <svg>
                        <use xlink:href="#youtube"></use>
                    </svg>
                </a>
            </div>
        </div>

        <div class="info_container ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            ABOUT US
                        </h6>
                        <p>
                            With more than 55 years of experience under our belts, we understand how to best serve our customers through tried and true service principles: We create food we’re proud to serve and deliver it fast, with a smile.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_form ">
                            <h5>
                                Newsletter
                            </h5>
                            <form action="#">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            NEED HELP
                        </h6>
                        <p>
                            With more than 55 years of experience under our belts, we understand how to best serve our customers through tried and true service principles: We create food we’re proud to serve and deliver it fast, with a smile.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            CONTACT US
                        </h6>
                        <div class="info_link-box">
                            <span> Vilnius, Lithuania </span>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>+37066666666</span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> demo@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section -->
        <?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer section -->
    </section>
</body>
</html>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dodo\resources\views/front/index.blade.php ENDPATH**/ ?>