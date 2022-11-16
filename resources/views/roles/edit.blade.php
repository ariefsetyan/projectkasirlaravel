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
                    <h3 class="box-title">FORM Roles</h3>
                </div>
                {!! Form::open(['url' => 'roles/update/'.$roles->id,'method' => 'post']) !!}
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('id'); !!}
                        {{ Form::text('id',$roles->id, array_merge(['class' => 'form-control','placeholder'=>'id'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('name'); !!}
                        {{ Form::text('name',$roles->name, array_merge(['class' => 'form-control','placeholder'=>'name'])) }}
                     </div>
                    <div class='form-group'>
                        <strong>Permission:</strong>
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                            <br/>
                        @endforeach
                     </div>

                </div>

            </div>

            <div class="box-footer">
                <a href="{{route('roles.index')}}" type="button" class="btn btn-default">Cencel</a>
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
