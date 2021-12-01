@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header_wrap">
                        <h1>All Pizza Sizes</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        
                        <div class="row justify-content-center">
                            @foreach ($pizzaSizes as $pizzaSize)
                            <div class="col-12">
                                <div class="pizza-sizes">
                                    <div class="pizza-sizes__size">
                                      <b> {{$pizzaSize->title}} </b> 
                                    </div>

                                    <div class="pizza-sizes__buttons">
                                        <form method="POST" action="{{route('pizzaSize.destroy', $pizzaSize)}}">
                                            <a href="{{route('pizzaSize.edit', $pizzaSize)}}" class="btn btn-success m-2">EDIT</a>
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection