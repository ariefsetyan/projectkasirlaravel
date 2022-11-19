@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM permissions</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'permissions/store','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('id'); !!}
                        {{ Form::text('id', null, array_merge(['class' => 'form-control','placeholder'=>'id'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('name'); !!}
                        {{ Form::text('name', null, array_merge(['class' => 'form-control','placeholder'=>'name'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('guard_name'); !!}
                        {{ Form::text('guard_name', null, array_merge(['class' => 'form-control','placeholder'=>'guard_name'])) }}
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
                <a href="{{route('permissions.index')}}" type="button" class="btn btn-default">Cencel</a>
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
