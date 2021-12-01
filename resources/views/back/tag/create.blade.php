
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Create Tag</h1></div>
                <div class="card-body">
                    <form action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">
                               Tag: <input type="text" class="form-control" name="tag_title" value="{{old('tag_title')}}">
                               
                            </div>
                        
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Tag</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
