@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Create Product</h1></div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-4 form-group">
                            <label> Title:</label> 
                              <input type="text" class="form-control" name="product_title" value="{{old('product_title')}}">
                              <small>Product title</small>
                            </div>
                            <div class="col-4 form-group">
                                <label>Amount:</label> 
                                <input type="text" class="form-control" name="product_amount" value="{{old('product_amount')}}">
                                <label>Description:</label> 
                                <input type="textarea" class="form-control" name="product_description" value="{{old('product_description')}}">
                                 <label>Price:</label> 
                                 <input type="text" class="form-control" name="product_price" value="{{old('product_price')}}">
                                 <label>Info:</label> 
                                 <textarea name="product_info"class="form-control" id="" cols="30" rows="10"value="{{old('product_price')}}"></textarea> 
                              </div>
                            
                            <div class="col-4 form-group">
                                <label> Product category: </label>
                                <select class="form-control" name="cat_id">
                                <option value="0">Select category</option>
                                @foreach ($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                                </select>
                               </div>
                               <div class="col-12 form-group">
                             <label>  Product photo: </label> 
                                <input type="file" class="form-control" name="product_photo">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Product</button>
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