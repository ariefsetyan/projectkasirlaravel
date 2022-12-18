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
                    <h3 class="box-title">FORM Permissions</h3>
                </div>
                {!! Form::open(['url' => 'permissions/update/'.$permissions->id,'method' => 'post']) !!}
                <div class="box-body">
                    {{ Form::hidden('id',$permissions->id, array_merge(['class' => 'form-control','placeholder'=>'id'])) }}
                    <div class='form-group'>
                        {!! Form::label('name'); !!}
                        {{ Form::text('name',$permissions->name, array_merge(['class' => 'form-control','placeholder'=>'name'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('guard_name'); !!}
                        {{ Form::text('guard_name',$permissions->guard_name, array_merge(['class' => 'form-control','placeholder'=>'guard_name'])) }}
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
