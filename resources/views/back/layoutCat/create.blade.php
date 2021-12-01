@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Add category to Layout </h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('layoutCat.store') }}" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-6 form-group">

                                <label> Select Category :</label>

                                <select class="form-control" name="layout_cat_id">
                                    <option value="0">Select category</option>
                                    @foreach($cats as $cat)
                                    <option value={{$cat->id}}
                                         @if(in_array( $cat->id, $usedCats))disabled @endif
                                         @if(old('layout_cat_id'==$cat->id))selected @endif
                                        >{{$cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-2">New Category</button>
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
