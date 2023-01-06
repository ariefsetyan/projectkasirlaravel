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
                        <h3 class="box-title">Daftar Cat_item</h3>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ url('cat_item/create') }}"> ADD</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="container">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <table id="cat_item" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>cat_name</th>
                                    <th>status</th>
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
        var table = $('#cat_item').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('cat_item.index') }}",
            columns: [
                {
                    "data": 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {data:'cat_name',name:'cat_name'},
                {data:'status',name:'status',render:function ($data) {
                    if($data == 1){
                        $output = '<span class="badge bg-green">Aktif</span>'
                    }else{
                        $output = '<span class="badge bg-red">Tidak Aktif</span>'
                    }
                    return $output;
                    }},
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
                    url: "{{ url('cat_item/destroy') }}/"+id,
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
