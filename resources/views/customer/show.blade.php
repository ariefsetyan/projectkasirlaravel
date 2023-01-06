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
                            <h3 class="box-title">FORM Customer</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id_customer</strong>
                            {!!$customer->id_customer!!}
                        </div>
<div class='form-group'>
                            <strong>nama_customer</strong>
                            {!!$customer->nama_customer!!}
                        </div>
<div class='form-group'>
                            <strong>telp</strong>
                            {!!$customer->telp!!}
                        </div>
<div class='form-group'>
                            <strong>alamat</strong>
                            {!!$customer->alamat!!}
                        </div>
<div class='form-group'>
                            <strong>status</strong>
                            {!!$customer->status!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$customer->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$customer->updated_at!!}
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
