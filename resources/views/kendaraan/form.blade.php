@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM kendaraans</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'kendaraan/store','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">

                    <div class='form-group'>
                        {!! Form::label('nopol'); !!}
                        {{ Form::text('nopol', null, array_merge(['class' => 'form-control','placeholder'=>'nopol'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('nama_kendaran'); !!}
                        {{ Form::text('nama_kendaran', null, array_merge(['class' => 'form-control','placeholder'=>'nama_kendaran'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('tipe_kendaran'); !!}
                        {{ Form::text('tipe_kendaran', null, array_merge(['class' => 'form-control','placeholder'=>'tipe_kendaran'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('jenis_kendaran'); !!}
                        {{ Form::text('jenis_kendaran', null, array_merge(['class' => 'form-control','placeholder'=>'jenis_kendaran'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('id_customer'); !!}
                        {{ Form::text('id_customer', null, array_merge(['class' => 'form-control','placeholder'=>'id_customer'])) }}
                     </div>

                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('kendaraan.index')}}" type="button" class="btn btn-default">Cencel</a>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection
@push('scriptdown')
    <script>

    </script>
@endpush
