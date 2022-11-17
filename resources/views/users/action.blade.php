<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
<button class='delete btn btn-danger btn-sm' value="{{$user->id}}">Delete</button>
{{--{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}--}}
{{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
{{--{!! Form::close() !!}--}}
