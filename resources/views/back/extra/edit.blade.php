@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Edit Extra</h1></div>
                <div class="card-body">

                    <form action="{{ route('extra.update', $extra)}}" method="post" enctype="multipart/form-data">
                        
                        <div class="col-4 form-group">
                            <label>Title:</label> 
                            <input type="text" class="form-control" name="extra_title" value="{{old('extra_title',$extra->title)}}">
                            <label> Price:</label> 
                              <input type="text" class="form-control" name="extra_price_s" value="{{old('extra_price_s', $extra->price_s)}}">
                               <small>Price for small pizza</small>
                               <input type="text" class="form-control" name="extra_price_m" value="{{old('extra_price_m',$extra->price_m)}}">
                               <small>Price for medium pizza</small>
                               <input type="text" class="form-control" name="extra_price_l" value="{{old('extra_price_l',$extra->price_l)}}">
                               <small>Price for large pizza</small>
                             </div>

                            <div class="col-4 enter-image">
                                @if($extra->photo)
                                <img src="{{$extra->photo}}"> 
                                @else
                                <img src="{{asset('img/no-image.png')}}"> 
                                @endif
                            </div>

                            <div class="col-4 form-group">
                                Photo: <input type="file" class="form-control" name="extra_photo">
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" name="delete_photo">
                                    <label class="form-check-label">
                                       Delete Photo
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">Edit Extra</button>
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