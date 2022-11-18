@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM menuses</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'menus/store','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('id'); !!}
                        {{ Form::text('id', null, array_merge(['class' => 'form-control','placeholder'=>'id'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('name_menu'); !!}
                        {{ Form::text('name_menu', null, array_merge(['class' => 'form-control','placeholder'=>'name_menu'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('url'); !!}
                        {{ Form::text('url', null, array_merge(['class' => 'form-control','placeholder'=>'url'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('route'); !!}
                        {{ Form::text('route', null, array_merge(['class' => 'form-control','placeholder'=>'route'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('icon'); !!}
                        {{ Form::text('icon', null, array_merge(['class' => 'form-control','placeholder'=>'icon'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('is_active'); !!}
                        {{ Form::text('is_active', null, array_merge(['class' => 'form-control','placeholder'=>'is_active'])) }}
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
                <a href="{{route('menus.index')}}" type="button" class="btn btn-default">Cencel</a>
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
