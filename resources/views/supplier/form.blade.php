@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM suppliers</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'supplier/store','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('kode_supplier'); !!}
                        {{ Form::text('kode_supplier', null, array_merge(['class' => 'form-control','placeholder'=>'kode_supplier'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('nama_supplier'); !!}
                        {{ Form::text('nama_supplier', null, array_merge(['class' => 'form-control','placeholder'=>'nama_supplier'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('telp'); !!}
                        {{ Form::text('telp', null, array_merge(['class' => 'form-control','placeholder'=>'telp'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('email'); !!}
                        {{ Form::text('email', null, array_merge(['class' => 'form-control','placeholder'=>'email'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('alamat'); !!}
                        {{ Form::text('alamat', null, array_merge(['class' => 'form-control','placeholder'=>'alamat'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('status'); !!}
                        {{ Form::select('status', ['1' => 'Aktif', '0' => 'tidak aktif'], '1',['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('supplier.index')}}" type="button" class="btn btn-default">Cencel</a>
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
