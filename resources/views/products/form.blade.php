@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM products</h3>

                <div class="box-tools pull-right">

                </div>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>
                        {!! Form::open(['url' => 'products/store','method' => 'post']) !!}
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
                        {!! Form::label('detail'); !!}
                        {{ Form::text('detail', null, array_merge(['class' => 'form-control','placeholder'=>'detail'])) }}
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
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
            <div class="box-footer">
                Footer
            </div>
        </div>
    </section>
@endsection
@push('scriptdown')
    <script>

    </script>
@endpush
