@extends('layouts.master')

@section('content')
<div>
    <div class="filter p-3 d-flex justify-content-around align-items-center my-2">
        @include('partials.search')
        @include('partials.categoryFilter')
    </div>
    <div class="items my-3">
        <table class="table table-striped">
            <thead class="bg-dark text-light">
                <tr>
                    <td>#</td>
                    <td>Poster</td>
                    <td>Title</td>
                    <td>Year</td>
                    <td>Category</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @if($movies->count() == 0)
                    <tr>
                        <td colspan="6" class="text-center text-capitalize">no movies founded</td>
                    </tr>
                @else
                    @foreach ($movies as $movie)
                        <x-movieRow :movie='$movie'/>
                    @endforeach
                @endif
            </tbody>
    </div>
</div>

@endsection
