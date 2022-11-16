<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
@can('role-edit')
    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
@endcan
@can('role-delete')
    <a href='{!! url('roles/destroy',$role->id) !!}' class='delete btn btn-danger btn-sm'>Delete</a>
@endcan

