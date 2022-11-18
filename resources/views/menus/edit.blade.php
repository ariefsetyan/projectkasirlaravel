@extends('layouts.app')

@section('content')
    <section class="content">

        <div class="box">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FORM Menus</h3>
                </div>
                {!! Form::open(['url' => 'menus/update/'.$menus->id,'method' => 'post']) !!}
                <div class="box-body">
                        {{ Form::hidden('id',$menus->id, array_merge(['class' => 'form-control','placeholder'=>'id'])) }}
                    <div class='form-group'>
                        {!! Form::label('name_menu'); !!}
                        {{ Form::text('name_menu',$menus->name_menu, array_merge(['class' => 'form-control','placeholder'=>'name_menu'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('url'); !!}
                        {{ Form::text('url',$menus->url, array_merge(['class' => 'form-control','placeholder'=>'url'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('route'); !!}
                        {{ Form::text('route',$menus->route, array_merge(['class' => 'form-control','placeholder'=>'route'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('icon'); !!}
                        {{ Form::text('icon',$menus->icon, array_merge(['class' => 'form-control','placeholder'=>'icon'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('is_active'); !!}
                        {{ Form::select('is_active', ["t"=>"Aktif","f"=>"Tidak aktif"],$menus->is_active,array_merge(['class' => 'form-control'])) }}
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
