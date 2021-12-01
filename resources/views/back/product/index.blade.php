@extends('layouts.app')
@section('content')
<div id="products"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header__wrap">
                        <h1>Products list</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($products as $product)

                    <div class="items">
                        <div class="items">
                            @if ($product->photo)
                            <img src="{{$product->photo}}">
                            @else
                            <img src="{{asset('img/no-image.png')}}">
                            @endif
                        </div>
                        <div class="items">
                            <h6> {{$product->title}} </h6>
                        </div>
                        <div class="items">
                            {{$product->amount}}
                            <div> <small>Amount</small> </div>
                        </div>
                        <div class="items">
                            {{$product->description}}
                            <div> <small>Description</small>
                            </div>
                        </div>
                        <div class="items">
                            {{$product->price}}
                            <div> <small>Price</small> </div>

                            @if($product->cats->first())
                            <div class="items__category">
                                {{$product->cats->first()->title}}</div>
                                <div> <small>Category</small> </div>
                            
                            @endif

                            <div class="items">
                                <span data-tooltip="{{$product->info}}" data-tooltip-conf="multiline">Info</span>

                            </div>
                            <div class="items__buttons">
                                <form method="POST" action="{{route('product.destroy', $product)}}">
                                    <a href="{{route('product.edit', $product)}}" class="btn btn-success m-2">EDIT</a>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
