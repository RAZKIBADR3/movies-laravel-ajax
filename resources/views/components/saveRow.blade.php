@props(['save'])

<tr>
    <td class="save_id">{{$save->id}}</td>
    <td><img style="width:100px;height:150px;" src="{{ asset('img/'.$save->movie->img) }}" alt="movie poster"></td>
    <td class="text-capitalize">{{$save->movie->title}}</td>
    <td class="text-capitalize att">{{$save->username}}</td>
    <td class="text-capitalize att">{{$save->description}}</td>
    <td class="col-2">
        <div class="my-2 d-flex justify-content-evenly">
            <button class="col-5 text-center btn btn-warning px-3" onclick="editSaveRow(this)">Edit</button>
        </div>
        <button class="d-block my-2 col-5 mx-auto text-center btn btn-danger px-3" onclick="deleteSave({{$save->id}})">Delete</button>
    </td>
</tr>
