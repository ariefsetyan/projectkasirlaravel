<a class="btn btn-info" href="{{ route('products.show',$row->id) }}">Show</a>
@can('role-edit')
    <a class="btn btn-primary" href="{{ route('products.edit',$row->id) }}">Edit</a>
@endcan
@can('role-delete')
    <a href='{!! url('products/destroy',$row->id) !!}' class='delete btn btn-danger btn-sm'>Delete</a>
@endcan

