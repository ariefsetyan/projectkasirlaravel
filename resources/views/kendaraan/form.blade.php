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
                        {!! Form::label('id_kendaraan'); !!}
                        {{ Form::text('id_kendaraan', null, array_merge(['class' => 'form-control','placeholder'=>'id_kendaraan'])) }}
                     </div>
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
                        {!! Form::label('created_at'); !!}
                        {{ Form::text('created_at', null, array_merge(['class' => 'form-control','placeholder'=>'created_at'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('updated_at'); !!}
                        {{ Form::text('updated_at', null, array_merge(['class' => 'form-control','placeholder'=>'updated_at'])) }}
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
