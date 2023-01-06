@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM customers</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'customer/store','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('id_customer'); !!}
                        {{ Form::text('id_customer', null, array_merge(['class' => 'form-control','placeholder'=>'id_customer'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('nama_customer'); !!}
                        {{ Form::text('nama_customer', null, array_merge(['class' => 'form-control','placeholder'=>'nama_customer'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('telp'); !!}
                        {{ Form::text('telp', null, array_merge(['class' => 'form-control','placeholder'=>'telp'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('alamat'); !!}
                        {{ Form::text('alamat', null, array_merge(['class' => 'form-control','placeholder'=>'alamat'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('status'); !!}
                        {{ Form::text('status', null, array_merge(['class' => 'form-control','placeholder'=>'status'])) }}
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
                <a href="{{route('customer.index')}}" type="button" class="btn btn-default">Cencel</a>
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
