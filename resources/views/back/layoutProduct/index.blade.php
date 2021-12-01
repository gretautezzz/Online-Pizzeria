@extends('layouts.app')
@section('content')
<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <ul class="list-group">
                @foreach ($cats as $cat)
                <li class="list-group-item">
                    <a class="links-list" href="{{route('layoutProduct.index', $cat)}}">{{$cat->title}}</a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header"> 
                <h1> {{$header}} </h1>
            </div>

            <div class="card-body">
                <ul class="list-group" id="arrow-buttons">
                    @forelse($layoutProducts as $layoutProduct)
                    <li class="list-group-item">
                        <div class="col-12">
                            <div class="index-list">
                                <div class="index-list__item">
                                    {{$layoutProduct->getProduct->title}}
                                </div>
                                <div class="index-list">
                                    @if ($layoutProduct->getProduct->photo)
                                    <img src="{{$layoutProduct->getProduct->photo}}">
                                    @else
                                    <img src="{{asset('img/no-image.png')}}">
                                    @endif
                                </div>
                                <div class="index-list__buttons">
                                    <div class="index-list__svg">
                                        <form method="POST" action="{{route('layoutProduct.up', [$layoutProduct,$catNow])}}">
                                            @csrf
                                            <button type="submit">
                                                <svg>
                                                    <use xlink:href="#arrow"></use>
                                                </svg>
                                            </button>
                                        </form>
                                        <form method="POST" action="{{route('layoutProduct.down', [$layoutProduct,$catNow])}}">
                                            @csrf
                                            <button type="submit">
                                                <svg class="rotate">
                                                    <use xlink:href="#arrow"></use>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    <form method="POST" action="{{route('layoutProduct.destroy', $layoutProduct)}}">
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                            <p> {{$message}}</p>
                        @endforelse
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@include('layouts.svg')
@endsection
