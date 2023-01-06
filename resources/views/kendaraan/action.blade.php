<a class="btn btn-info" href="{{ route('kendaraan.show',$row->id) }}">Show</a>
@can('role-edit')
    <a class="btn btn-primary" href="{{ route('kendaraan.edit',$row->id) }}">Edit</a>
@endcan
@can('role-delete')
 <button class='delete btn btn-danger btn-sm' value="{{$row->id}}">Delete</button>
@endcan

