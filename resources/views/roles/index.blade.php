@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left">
                            <h3 class="box-title">Role Management</h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                        </div>
                    </div>

                    <div class="box-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="content">
                            <table id="roles" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
@push('scriptdown')
    <script type="text/javascript">
        $(function() {
            var table = $('#roles').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('roles.index') }}",
                columns: [
                    {
                        "data": 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {data:'id',name:'id'},
                    {data:'name',name:'name'},
                    // {data:'guard_name',name:'guard_name'},
                    // {data:'create_at',name:'create_at'},
                    // {data:'update_at',name:'update_at'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush
