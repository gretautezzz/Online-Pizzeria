@extends('layouts.front_app')
<body>
    <div class="hero_area">
        @include('front.header')
        <main role="main">
            <form action="{{route('checkout.storeClient', $client)}}" method="post" class="cart">
                <div class="container mt-5">
                    <h1>{{$client->phone}}</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>Name: </label>
                        <input type="text" name="client_name" value="{{$client->name}}">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label>Address: </label>
                    <input type="text" name="client_address" value="{{$client->address}}">
                </div>
                <div class="container mt-5">
                    <button type="submit" class="btn btn-warning"> Edit</button>
                </div>
                @csrf
            </form>
            <form action="{{route('checkout.order', $client)}}" method="post" class="cart">
                <div class="container mt-5">
                    <button type="submit" class="btn btn-danger"> Order</button>
                </div>
            </form>
        </main>
    </div>
    @include('front.footer')
</body>
</html>
