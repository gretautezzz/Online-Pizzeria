@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Create extra</h1></div>
                <div class="card-body">
                    <form action="{{ route('extra.store') }}" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-4 form-group">
                            <label> Title:</label> 
                              <input type="text" class="form-control" name="extra_title" value="{{old('extra_title')}}">
                              <small>Extra title</small>
                            </div>
                            <div class="col-4 form-group">
                             <label> Prices:</label> 
                               <input type="text" class="form-control" name="extra_price_s" value="{{old('extra_price_s')}}">
                                <small>Price S</small>
                                <input type="text" class="form-control" name="extra_price_m" value="{{old('extra_price_m')}}">
                                <small>Price M</small>
                                <input type="text" class="form-control" name="extra_price_l" value="{{old('extra_price_l')}}">
                                <small>Price L</small>
                              </div>
                            <div class="col-4 form-group">
                             <label>  Photo: </label> 
                                <input type="file" class="form-control" name="extra_photo">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Extra</button>
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