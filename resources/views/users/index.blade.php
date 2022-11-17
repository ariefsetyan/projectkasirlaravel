@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <h3 class="box-title">Daftar user</h3>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ url('users/create') }}"> ADD</a>
                    </div>
                </div>
                <div class="box-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table id="users" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
{{--                        @foreach ($data as $key => $user)--}}
{{--                            <tr>--}}
{{--                                <td>{{ ++$i }}</td>--}}
{{--                                <td>{{ $user->name }}</td>--}}
{{--                                <td>{{ $user->email }}</td>--}}
{{--                                <td>--}}
{{--                                    @if(!empty($user->getRoleNames()))--}}
{{--                                        @foreach($user->getRoleNames() as $v)--}}
{{--                                            <label class="badge badge-success">{{ $v }}</label>--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>--}}
{{--                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>--}}
{{--                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}--}}
{{--                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
{{--                                    {!! Form::close() !!}--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif




@endsection

@push('scriptdown')
    <script type="text/javascript">
        $(function() {
            var table = $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                columns: [
                    {
                        "data": 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {data:'id',name:'id'},
                    {data:'name',name:'name'},
                    {data:'email',name:'email'},
                    {data:'roles',name:'roles'},
                    // {data:'create_at',name:'create_at'},
                    // {data:'updated_at',name:'updated_at'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });

        $(document).on("click",".delete",function (e){

            if (confirm('yakin data akan di hapus?')) {
                let id = $(this).val();
                let token = $("meta[name='csrf-token']").attr("content");
                $.ajax(
                    {
                        url: "users/"+id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (){
                            location.reload();
                        }
                    });
            } else {
                return true
            }
        })
    </script>
@endpush
