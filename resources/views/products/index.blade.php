@extends('layouts.app')

@push('styles')

@endpush
@push('script')

@endpush

@section('content')
<section class="content-header">
    <h1>
    products

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <h3 class="box-title">Daftar Products</h3>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ url('products/create') }}"> ADD</a>
                    </div>
                </div>

                <div class="box-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table id="products" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th> <th>name</th> <th>detail</th> <th>created_at</th> <th>updated_at</th>
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

        var table = $('#products').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.index') }}",
            columns: [
                {data:'id',name:'id'}, {data:'name',name:'name'}, {data:'detail',name:'detail'}, {data:'created_at',name:'created_at'}, {data:'updated_at',name:'updated_at'},
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
