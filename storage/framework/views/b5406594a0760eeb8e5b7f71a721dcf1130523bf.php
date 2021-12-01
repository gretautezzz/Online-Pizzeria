<header class="header_section">
    <div class="" id="miniCart">
        <?php echo $__env->make('front.cart.mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="<?php echo e(route('front.index')); ?>">
            <span>
                Papito pizza
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('front.index')); ?>">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html"> Pizzas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">
                        Snacks
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="why.html">
                        Desserts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimonial.html">
                        Drinks
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimonial.html">
                        Other
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contacts</a>
                </li>
            </ul>
            <div class="nav-item">
                <?php if(!isset($pageData->hideMiniCart)): ?>
                <button type="submit" id="miniCart" class="btn shadow-none" data-target="miniCart">
                    <svg>
                        <use xlink:href="#cart"></use>
                    </svg>
                    <i><strong><?php echo e($pageData->cartCount); ?></strong></i>
                </button>
                <?php endif; ?>
            </div>
            <div class="nav-item">
                <a class="nav-link" href="<?php echo e(route('cart.view')); ?>"> View Cart</a>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\dodo\resources\views/front/header.blade.php ENDPATH**/ ?>