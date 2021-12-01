@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header_wrap">
                        <h1>All categories</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach ($cats as $cat)
                            <div class="col-12">
                                <div class="index-list">
                                    <div class="index-list__item">
                                        {{$cat->title}}
                                    </div>
                                    <div class="index-list__buttons">
                                        <form method="POST" action="{{route('cat.destroy', $cat)}}">
                                        <a href="{{route('cat.edit', $cat)}}" class="btn btn-success m-2">EDIT</a>
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
