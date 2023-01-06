<a class="btn btn-info" href="{{ route('cat_item.show',$row->id_cat_item) }}">Show</a>
{{--@can('role-edit')--}}
    <a class="btn btn-primary" href="{{ route('cat_item.edit',$row->id_cat_item) }}">Edit</a>
{{--@endcan--}}
{{--@can('role-delete')--}}
 <button class='delete btn btn-danger btn-sm' value="{{$row->id_cat_item}}">Delete</button>
{{--@endcan--}}

