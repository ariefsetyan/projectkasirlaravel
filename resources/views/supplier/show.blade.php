@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush

@section('content')
    <section class="content">

        <div class="box">

            <div class="box-body">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">FORM Supplier</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id_supplier</strong>
                            {!!$supplier->id_supplier!!}
                        </div>
<div class='form-group'>
                            <strong>kode_supplier</strong>
                            {!!$supplier->kode_supplier!!}
                        </div>
<div class='form-group'>
                            <strong>nama_supplier</strong>
                            {!!$supplier->nama_supplier!!}
                        </div>
<div class='form-group'>
                            <strong>telp</strong>
                            {!!$supplier->telp!!}
                        </div>
<div class='form-group'>
                            <strong>email</strong>
                            {!!$supplier->email!!}
                        </div>
<div class='form-group'>
                            <strong>alamat</strong>
                            {!!$supplier->alamat!!}
                        </div>
<div class='form-group'>
                            <strong>status</strong>
                            {!!$supplier->status!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$supplier->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$supplier->updated_at!!}
                        </div>

                        <div class="box-footer">
                        </div>


                    </div>
                </div>
            </div>
            <div class="box-footer">

            </div>
        </div>
    </section>
@endsection
@push('scriptdown')
    <script>

    </script>
@endpush
