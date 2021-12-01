@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Product</h1>
                </div>
                <div class="card-body">

                    <form action="{{ route('product.update', $product)}}" method="post" enctype="multipart/form-data">

                        <div class="col-8 form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="product_title" value="{{old('product_title',$product->title)}}">
                            <label>Amount:</label>
                            <input type="text" class="form-control" name="product_amount" value="{{old('product_amount',$product->amount)}}">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="product_description" value="{{old('product_description',$product->description)}}">
                            <label>Price:</label>
                            <input type="text" class="form-control" name="product_price" value="{{old('product_price',$product->price)}}">
                            <label>Info:</label>
                          <textarea name="product_info"class="form-control" id="" cols="30" rows="10"value="{{old('product_price',$product->info)}}"></textarea>  
                        </div>

                        <div class="col-4 form-group">
                            <label> Product category: </label>
                            <select class="form-control" name="cat_id">
                            <option value="0">Without cateory</option>
                            @foreach ($cats as $cat)
                                <option value="{{$cat->id}}" @if($cat->id == $catId) selected @endif>{{$cat->title}}</option>
                            @endforeach
                            </select>
                           </div>

                        <div class="col-4 enter-image">
                            @if($product->photo)
                            <img src="{{$product->photo}}">
                            @else
                            <img src="{{asset('img/no-image.png')}}">
                            @endif
                        </div>

                        <div class="col-12 form-group">
                            Photo: <input type="file" class="form-control" name="product_photo">
                            <div class="form-check mt-2">
                                <input type="checkbox" class="form-check-input" name="delete_photo">
                                <label class="form-check-label">
                                    Delete Photo
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-success mt-2">Edit Product</button>
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
