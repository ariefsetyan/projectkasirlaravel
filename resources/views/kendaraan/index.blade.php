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
                        <h3 class="box-title">Daftar Kendaraan</h3>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ url('kendaraan/create') }}"> ADD</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="container">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <table id="kendaraan" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nopol</th>
                                    <th>nama_kendaran</th>
                                    <th>tipe_kendaran</th>
                                    <th>jenis_kendaran</th>
                                    <th>id_customer</th>
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
        var table = $('#kendaraan').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('kendaraan.index') }}",
            columns: [
                {
                    "data": 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {data:'nopol',name:'nopol'},
                {data:'nama_kendaran',name:'nama_kendaran'},
                {data:'tipe_kendaran',name:'tipe_kendaran'},
                {data:'jenis_kendaran',name:'jenis_kendaran'},
                {data:'id_customer',name:'id_customer'},
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
                    url: "{{ url('kendaraan/destroy') }}/"+id,
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
