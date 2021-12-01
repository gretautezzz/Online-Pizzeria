@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-header_wrap">
                        <h1>All Tags</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        
                        <div class="row justify-content-center">
                            @foreach ($tags as $tag)
                            <div class="col-12">
                                <div class="index-list">
                                    <div class="index-list__item">
                                        {{$tag->title}} 
                                    </div>

                                    <div class="index-list__buttons">
                                        <form method="POST" action="{{route('tag.destroy', $tag)}}">
                                            <a href="{{route('tag.edit', $tag)}}" class="btn btn-success m-2">EDIT</a>
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