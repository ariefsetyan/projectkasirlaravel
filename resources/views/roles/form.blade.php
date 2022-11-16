@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM roles</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'roles/store','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">

                    <div class='form-group'>
                        {!! Form::label('name'); !!}
                        {{ Form::text('name', null, array_merge(['class' => 'form-control','placeholder'=>'name'])) }}
                    </div>
                    <div class='form-group'>
                        <strong>Permission:</strong>
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
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
