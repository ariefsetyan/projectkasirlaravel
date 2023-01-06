@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM KATEGORI ITEM</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'cat_item/store','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">
                    <div class='form-group'>
                        {!! Form::label('nama'); !!}
                        {{ Form::text('cat_name', null, array_merge(['class' => 'form-control','placeholder'=>'nama'])) }}
                    </div>
                    <div class='form-group'>
                        {!! Form::label('status'); !!}
                        {{ Form::select('status', ['1' => 'Aktif', '0' => 'tidak aktif'], '1',['class' => 'form-control']) }}
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('cat_item.index')}}" type="button" class="btn btn-default">Cencel</a>
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
