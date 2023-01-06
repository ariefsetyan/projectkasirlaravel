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
                            <h3 class="box-title">FORM Kendaraan</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id_kendaraan</strong>
                            {!!$kendaraan->id_kendaraan!!}
                        </div>
<div class='form-group'>
                            <strong>nopol</strong>
                            {!!$kendaraan->nopol!!}
                        </div>
<div class='form-group'>
                            <strong>nama_kendaran</strong>
                            {!!$kendaraan->nama_kendaran!!}
                        </div>
<div class='form-group'>
                            <strong>tipe_kendaran</strong>
                            {!!$kendaraan->tipe_kendaran!!}
                        </div>
<div class='form-group'>
                            <strong>jenis_kendaran</strong>
                            {!!$kendaraan->jenis_kendaran!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$kendaraan->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$kendaraan->updated_at!!}
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
