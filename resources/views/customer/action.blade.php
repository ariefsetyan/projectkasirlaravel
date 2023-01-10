<a class="btn btn-info" href="{{ route('customer.show',$row->id_customer) }}">Show</a>
{{--@can('role-edit')--}}
    <a class="btn btn-primary" href="{{ route('customer.edit',$row->id_customer) }}">Edit</a>
{{--@endcan--}}
{{--@can('role-delete')--}}
 <button class='delete btn btn-danger btn-sm' value="{{$row->id_customer}}">Delete</button>
{{--@endcan--}}

