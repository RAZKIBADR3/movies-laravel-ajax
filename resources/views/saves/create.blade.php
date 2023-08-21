@extends('layouts.master')

@section('content')
<div class="p-4 my-4 d-flex justify-content-center align-items-center">
    <div class="item col-6 p-4 d-flex justify-content-evenly align-items-center" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div>
            <img style="width:300px;height:430px" class="col-6" src="{{ asset('img/'.$movie->img) }}" alt="movie poster">
            <p class="my-3 text-capitalize text-center text-muted h4"> {{$movie->title}} </p>
        </div>
        <form class="content p-2 col-6" method="post" action="{{ route('saves.store') }}">
            @csrf
            <input name="id_movie" type="hidden" value="{{$movie->id}}">
            <div class="col-8 mx-auto">
                <label class="text-capitalize my-2">username</label>
                <input name="username" type="text" class="form-control" placeholder="Jake.." required>
            </div>
            <div class="col-8 mx-auto">
                <label class="text-capitalize my-2">desctiption</label>
                <input name="description" type="text" class="form-control" placeholder="My Best Movie">
            </div>
            <input type="submit" class="my-3 d-block col-8 mx-auto btn btn-dark px-3" value="Save">
        </form>
    </div>
</div>
@endsection
