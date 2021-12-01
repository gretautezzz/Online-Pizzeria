
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Category</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('cat.update', $cat) }}" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">
                               Category:<input type="text" class="form-control" name="cat_title" value="{{old('cat_title', $cat->title)}}">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">Edit Category</button>
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