@extends('layouts.master')

@section('content')
<div class="p-4 my-4 d-flex justify-content-center align-items-center">
    <div class="item col-6 p-4 d-flex justify-content-evenly align-items-center" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div>
            <img style="width:300px;height:430px" class="col-6" src="{{ asset('img/'.$save->movie->img) }}" alt="movie poster">
            <p class="my-3 text-capitalize text-center text-muted h4"> {{$save->movie->title}} </p>
        </div>
        <form class="content p-2 col-6" method="POST" action="{{ route('saves.update', $save) }}">
            @csrf
            @method('PUT')
            <div class="col-8 mx-auto">
                <label class="text-capitalize my-2">username</label>
                <input name="username" value="{{$save->username}}" type="text" class="form-control" placeholder="Jake.." required>
            </div>
            <div class="col-8 mx-auto">
                <label class="text-capitalize my-2">description</label>
                <input name="description" value="{{$save->description}}" type="text" class="form-control" placeholder="My Best Movie">
            </div>
            <input type="submit" class="my-3 d-block col-8 mx-auto btn btn-warning px-3" value="Update">
        </form>
    </div>
</div>
@endsection
