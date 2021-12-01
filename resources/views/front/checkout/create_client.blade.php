@extends('layouts.front_app')
<body>
    <div class="hero_area">
        @include('front.header')
        <main role="main">
            <form action="{{route('checkout.storeClient', $client)}}" method="post" class="cart">
                <div class="container mt-4">
                    <h1>{{$client->phone}}</h1>
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
    @include('front.footer')
</body>
</html>
