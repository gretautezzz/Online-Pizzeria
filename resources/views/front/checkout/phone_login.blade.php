@extends('layouts.front_app')
<body>
    <div class="hero_area">
        @include('front.header')
        <main role="main" class="cart">
            <form action="{{route('checkout.doPhoneLogin')}}" class="cart" method="POST">
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
                    @csrf
            </form>
        </main>
    </div>
    @include('front.footer')
</body>
</html>
