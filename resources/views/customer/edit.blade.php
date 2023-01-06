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
                    <h3 class="box-title">FORM Customer</h3>
                </div>
                {!! Form::open(['url' => 'customer/update/'.$customer->id_customer,'method' => 'post']) !!}
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('id_customer'); !!}
                        {{ Form::text('id_customer',$customer->id_customer, array_merge(['class' => 'form-control','placeholder'=>'id_customer'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('nama_customer'); !!}
                        {{ Form::text('nama_customer',$customer->nama_customer, array_merge(['class' => 'form-control','placeholder'=>'nama_customer'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('telp'); !!}
                        {{ Form::text('telp',$customer->telp, array_merge(['class' => 'form-control','placeholder'=>'telp'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('alamat'); !!}
                        {{ Form::text('alamat',$customer->alamat, array_merge(['class' => 'form-control','placeholder'=>'alamat'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('status'); !!}
                        {{ Form::text('status',$customer->status, array_merge(['class' => 'form-control','placeholder'=>'status'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('created_at'); !!}
                        {{ Form::text('created_at',$customer->created_at, array_merge(['class' => 'form-control','placeholder'=>'created_at'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('updated_at'); !!}
                        {{ Form::text('updated_at',$customer->updated_at, array_merge(['class' => 'form-control','placeholder'=>'updated_at'])) }}
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
