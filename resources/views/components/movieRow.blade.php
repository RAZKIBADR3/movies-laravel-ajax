@props(['movie'])

<tr>
    <td>{{$movie->id}}</td>
    <td><img style="width:100px;height:150px;" src="{{ asset('img/'.$movie->img) }}" alt="movie poster"></td>
    <td class="text-capitalize">{{$movie->title}}</td>
    <td>{{$movie->year}}</td>
    <td>
        <a href="/categoryFilter/{{$movie->category->title}}" class="text-capitalize text-decoration-none px-3 mx-2">{{$movie->category->title}}</a>
    </td>
    <td>
        <a href="/movie/{{$movie->id}}" class="btn btn-outline-success px-3">View</a>
    </td>
</tr>
