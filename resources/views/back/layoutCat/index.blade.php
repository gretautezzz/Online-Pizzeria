@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>All Layout Categories</h1>
                </div>

                <div class="card-body">
                    <ul class="list-group" id="arrow-buttons">
                        @foreach ($layoutCats as $layoutCat)
                        <li class="list-group-item">
                            <div class="col-12">
                                <div class="index-list">
                                    <div class="index-list__item">
                                        {{$layoutCat->getCatName->title}} {{$layoutCat->id}}
                                    </div>

                                    <div class="index-list__buttons">
                                        <div class="index-list__svg">
                                            <form method="POST" action="{{route('layoutCat.up', $layoutCat)}}">
                                                @csrf
                                                <button type="submit">
                                                    <svg>
                                                        <use xlink:href="#arrow"></use>
                                                    </svg>
                                                </button>
                                            </form>
                                            <form method="POST" action="{{route('layoutCat.down', $layoutCat)}}">
                                                @csrf
                                                <button type="submit">
                                                    <svg class="rotate">
                                                        <use xlink:href="#arrow"></use>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                        <form method="POST" action="{{route('layoutCat.destroy', $layoutCat)}}">
                                            <button type="submit" class="btn btn-danger">Remove</button>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.svg')
@endsection
