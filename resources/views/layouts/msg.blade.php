<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if ($errors->any())
            <div class="alert">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if(session()->has('success_message'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success_message')}}
                </div>
            @endif
           
            @if(session()->has('info_message'))
                <div class="alert alert-info" role="alert">
                    {{session()->get('info_message')}}
                </div>
            @endif
        </div>
    </div>
</div>
