@extends('layouts.app')

@push('styles')

@endpush
@push('script')

@endpush

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <h3 class="box-title">Daftar Roles</h3>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ url('roles/create') }}"> ADD</a>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table id="roles" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>id</th> <th>name</th> <th>guard_name</th> <th>created_at</th> <th>updated_at</th>
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
</section>

@endsection
@push('scriptdown')
<script type="text/javascript">
    $(function() {
        var table = $('#roles').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('roles.index') }}",
            columns: [
                {
                    "data": 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {data:'id',name:'id'}, {data:'name',name:'name'}, {data:'guard_name',name:'guard_name'}, {data:'created_at',name:'created_at'}, {data:'updated_at',name:'updated_at'},
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
            $.ajax(
                {
                    url: "{{ url('roles/destroy') }}/"+id,
                    type: 'GET',
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
