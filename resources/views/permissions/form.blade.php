@extends('layouts.app')

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
                        {!! Form::label('name'); !!}
                        {{ Form::text('name', null, array_merge(['class' => 'form-control','placeholder'=>'name'])) }}
                     </div>

                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('permissions.index')}}" type="button" class="btn btn-default">Cencel</a>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection
@push('scriptdown')
    <script>

    </script>
@endpush
