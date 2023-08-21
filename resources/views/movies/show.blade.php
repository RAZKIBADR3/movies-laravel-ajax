@extends('layouts.master')

@section('content')
<div class="p-4 my-4 d-flex justify-content-center align-items-center">
    <div class="item col-6 p-4 d-flex justify-content-evenly align-items-center" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <img style="width:300px;height:430px" class="col-6" src="{{ asset('img/'.$movie->img) }}" alt="movie poster">
        <div class="content p-2 col-6">
            <p class="my-3 text-capitalize text-center"> title : {{$movie->title}} </p>
            <p class="my-3 text-capitalize text-center"> year : {{$movie->year}} </p>
            <p class="my-3 text-capitalize text-center"> category : <a href="/categoryFilter/{{$movie->category->title}}" class="text-capitalize text-decoration-none">{{$movie->category->title}}</a> </p>
            <a href="/save/create/{{$movie->id}}" class="my-3 d-block col-6 mx-auto btn btn-dark px-3">Save</a>
        </div>
    </div>
</div>
@endsection
