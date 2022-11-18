<a class="btn btn-info" href="{{ route('menus.show',$row->id) }}">Show</a>
@can('role-edit')
    <a class="btn btn-primary" href="{{ route('menus.edit',$row->id) }}">Edit</a>
@endcan
@can('role-delete')
    <a href='{!! url('menus/destroy',$row->id) !!}' class='delete btn btn-danger btn-sm'>Delete</a>
@endcan

