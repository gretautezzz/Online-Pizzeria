@extends('layouts.app')
@section('content')
<div id="extras"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header__wrap">
                        <h1>Extras list</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($extras as $extra)
                    
                        <div class="items">
                            <div class="items__extra">
                                @if ($extra->photo)
                                <img src="{{$extra->photo}}">
                                @else
                                <img src="{{asset('img/no-image.png')}}">
                                @endif
                            </div>
                            <div class="items__extra">
                              <h6> {{$extra->title}}  </h6> 
                            </div>
                            <div class="items__extra">
                             <small>Price S</small> {{$extra->price_s}} 
                            </div>
                            <div class="items__extra">
                             <small>Price M</small> {{$extra->price_m}} 
                            </div>  
                            <div class="items__extra">
                              <small>Price L</small> {{$extra->price_l}} 
                            </div>
                            <div class="items__buttons">
                                <form method="POST" action="{{route('extra.destroy', $extra)}}">
                                    <a href="{{route('extra.edit', $extra)}}" class="btn btn-success m-2">EDIT</a>
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