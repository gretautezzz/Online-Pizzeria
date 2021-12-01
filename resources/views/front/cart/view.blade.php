@extends('layouts.front_app')
<body>
    <div class="hero_area">
        @include('front.header')
        <main role="main" class="cart" class="cart">
            <form action="{{route('cart.update')}}" method="post">
                <div class="col-sm-12">
                    <ul class="list-group mini-cart">
                        <h2>My Cart</h2>
                        @forelse($pageData->cart as $cartProduct)
                        <li class="list-group-item">
                            <div class="mini-cart-product">
                                <img src="{{$cartProduct->photo}}" alt="">
                                <h5>{{$cartProduct->title}}</h5>
                                <h6> {{$cartProduct->price}} Eur x <input type="text" name="product[{{$cartProduct->id}}]" value="{{$cartProduct->count}}"> </h6>
                                <button type="submit" name="delete" value="{{$cartProduct->id}}">
                                    <svg>
                                        <use xlink:href="#bin"></use>
                                    </svg>
                                </button>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item"> Cart is empty</li>
                        @endforelse
                        @if($pageData->cartTotal)
                        <li class="list-group-item">
                            <h4>Total: {{$pageData->cartTotal}} EUR</h4>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="container mt-5">
                    <button type="submit" class="btn btn-warning"> Update Cart</button>
                    <a href="{{route('checkout.phoneLogin')}}" class="btn btn-danger">Checkout</a>
                </div>
                @csrf
            </form>
        </main>
    </div>
    @include('front.footer')
    </section>
</body>
</html>
