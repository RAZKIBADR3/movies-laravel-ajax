$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

const editSaveRow = (btn) => {
    const div = btn.parentNode;
    const td = div.parentNode;
    const tr = td.parentNode;
    const save_id = $(tr).find('.save_id').html();
    $(tr).find('td.att').each((i, td)=>{
        const content = td.textContent;
        $(td).empty();
        $(td).append(`<input type="text" class="form-control" value="${content}">`);
    });
    $(btn).html('Update');
    $(btn).attr("onclick",`updateSaveRow(this,${save_id})`);
    $(div).append(`<button class="col-5 text-center btn btn-secondary px-3" onclick="cancelUpdate(this)">Cancel</button>`);
}

const cancelUpdate = (btn) => {
    console.log('cancel');
}

const updateSaveRow = (btn, id) => {
    displaySpinner();

    const data = {
        'id': id,
        'fields': {}
    };
    const div = btn.parentNode;
    const td = div.parentNode;
    const tr = td.parentNode;
    $(tr).find('td.att input').each((i, input)=>{
        const val = $(input).val();
        if(i == 0) {
            data.fields['username'] = val
        }else{
            data.fields['description'] = val
        }
    });
    $.ajax({
        url: '/save/update',
        type: 'PUT',
        dataType: 'json',
        data:{data : data},
        success: function(response){
            getSaves();
        }
    })
}

const deleteSave = (id) => {
    displaySpinner();
    $.ajax({
        url: '/save/destroy',
        type: 'DELETE',
        dataType: 'json',
        data:{id},
        success: function(response){
            console.log(response);
            getSaves();
        }
    })
}

const getSaves = () => {
    $.ajax({
        url: '/saves/get',
        type: 'get',
        success: function(response){
            const tbody = $('.saves-items tbody');
            tbody.empty();
            tbody.html(response);
        }
    })
}

const displaySpinner = () => {
    const tbody = $('.saves-items tbody');
    tbody.empty();
    tbody.append(`
        <tr>
            <td colspan="6">
                <div style="height: 15vh;" class="d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </td>
        </tr>
    `);
}

displaySpinner();
getSaves();
