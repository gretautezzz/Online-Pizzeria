@extends('layouts.front_app')
<body>
    <div class="hero_area">
        @include('front.header')
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
                                        <img src="{{asset('images/pizzaman.png')}}" />
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

                {{-- category start --}}
                @forelse($pageData->layout as $catWithProducts)
                <div class="col-sm-12">
                    <h2> <span class="badge badge-danger">{{$catWithProducts->cat->title}}</span></h2>
                </div>
                {{-- category end --}}

                {{-- product start--}}
                @forelse($catWithProducts->products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="{{$product->photo}}" alt="{{$product->title}}">
                            </div>
                            <div class="detail-box">
                                <div class="new">
                                    {{$product->title}}
                                </div>
                                <h6>
                                    Price
                                    <span>
                                        {{$product->price}} Eur
                                    </span>
                                </h6>
                            </div>
                        </a>
                        <form action="{{route('cart.add',$product)}}" method="POST">
                            <button type="submit" class="btn btn-light">Add to Cart</button>
                            @csrf
                        </form>
                    </div>
                </div>
                @empty
                <h4 class="m-5"> This category has no products</h4>
                @endforelse
                @empty
                <h4 class="m-5"> Products layout is empty</h4>
                @endforelse
                {{-- produkto end--}}
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
        @include('front.footer')
        <!-- footer section -->
    </section>
</body>
</html>
