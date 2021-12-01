@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Tag</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('tag.update', $tag) }}" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">
                              Tag:<input type="text" class="form-control" name="tag_title" value="{{old('tag_title', $tag->title)}}">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">Edit Tag</button>
                            </div>
                        </div>
                        {{-- @method('PUT') --}}
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection