@if($saves->count() == 0)
    <tr>
        <td colspan="6" class="text-center text-capitalize">no saves founded</td>
    </tr>
@else
    @foreach ($saves as $save)
        <x-saveRow :save='$save'/>
    @endforeach
@endif
