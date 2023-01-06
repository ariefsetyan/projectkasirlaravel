@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FORM Kendaraan</h3>
                </div>
                {!! Form::open(['url' => 'kendaraan/update/'.$kendaraan->id_kendaraan,'method' => 'post']) !!}
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('id_kendaraan'); !!}
                        {{ Form::text('id_kendaraan',$kendaraan->id_kendaraan, array_merge(['class' => 'form-control','placeholder'=>'id_kendaraan'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('nopol'); !!}
                        {{ Form::text('nopol',$kendaraan->nopol, array_merge(['class' => 'form-control','placeholder'=>'nopol'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('nama_kendaran'); !!}
                        {{ Form::text('nama_kendaran',$kendaraan->nama_kendaran, array_merge(['class' => 'form-control','placeholder'=>'nama_kendaran'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('tipe_kendaran'); !!}
                        {{ Form::text('tipe_kendaran',$kendaraan->tipe_kendaran, array_merge(['class' => 'form-control','placeholder'=>'tipe_kendaran'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('jenis_kendaran'); !!}
                        {{ Form::text('jenis_kendaran',$kendaraan->jenis_kendaran, array_merge(['class' => 'form-control','placeholder'=>'jenis_kendaran'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('created_at'); !!}
                        {{ Form::text('created_at',$kendaraan->created_at, array_merge(['class' => 'form-control','placeholder'=>'created_at'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('updated_at'); !!}
                        {{ Form::text('updated_at',$kendaraan->updated_at, array_merge(['class' => 'form-control','placeholder'=>'updated_at'])) }}
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
