@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Add product to Layout </h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('layoutProduct.store') }}" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">

                                <label> Select Product:</label>

                                <select class="form-control" name="layout_product_id">
                                    <option value="0">Select productegory</option>
                                    @foreach($products as $product)
                                    <option value={{$product->id}}
                                         @if(in_array( $product->id, $usedProducts))disabled @endif
                                         @if(old('layout_product_id'==$product->id))selected @endif
                                        >{{$product->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Product layout</button>
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
