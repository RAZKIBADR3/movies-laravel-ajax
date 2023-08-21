<form class="col-5" method="get" action="{{ route('movies.search') }}">
    @csrf
    <label class="my-2 text-capitalize text-muted">movie name</label>
    <div class="d-flex">
        <input class="form-control" value="{{old('title')}}" type="text" name="title" placeholder="Movie Name..">
        <input class="btn btn-dark px-3" type="submit" value="Search">
    </div>
</form>
