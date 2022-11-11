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
                    <h3 class="box-title">FORM Products</h3>
                </div>
                {!! Form::open(['url' => 'products/update/'.$products->id,'method' => 'post']) !!}
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('id'); !!}
                        {{ Form::text('id',$products->id, array_merge(['class' => 'form-control','placeholder'=>'id'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('name'); !!}
                        {{ Form::text('name',$products->name, array_merge(['class' => 'form-control','placeholder'=>'name'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('detail'); !!}
                        {{ Form::text('detail',$products->detail, array_merge(['class' => 'form-control','placeholder'=>'detail'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('created_at'); !!}
                        {{ Form::text('created_at',$products->created_at, array_merge(['class' => 'form-control','placeholder'=>'created_at'])) }}
                     </div>
<div class='form-group'>
                        {!! Form::label('updated_at'); !!}
                        {{ Form::text('updated_at',$products->updated_at, array_merge(['class' => 'form-control','placeholder'=>'updated_at'])) }}
                     </div>
                </div>

            </div>

            <div class="box-footer">
                <a href="{{route('products.index')}}" type="button" class="btn btn-default">Cencel</a>
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
