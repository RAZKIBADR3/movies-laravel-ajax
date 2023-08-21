<div class="cate col-5">
    <p class="my-3 text-capitalize text-muted">filter by category</p>
    <nav class="d-flex justify-content-center align-items-center">
        <a href="/movies" class="btn btn-{{$cate=='all'?'':'outline-'}}dark text-capitalize px-3 mx-2">all</a>
        <a href="/categoryFilter/romance" class="btn btn-{{$cate=='romance'?'':'outline-'}}dark text-capitalize px-3 mx-2">romance</a>
        <a href="/categoryFilter/drama" class="btn btn-{{$cate=='drama'?'':'outline-'}}dark text-capitalize px-3 mx-2">drama</a>
        <a href="/categoryFilter/action" class="btn btn-{{$cate=='action'?'':'outline-'}}dark text-capitalize px-3 mx-2">action</a>
    </nav>
</div>
