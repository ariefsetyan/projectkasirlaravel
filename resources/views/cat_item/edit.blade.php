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
                    <h3 class="box-title">FORM Cat_item</h3>
                </div>
                {!! Form::open(['url' => 'cat_item/update/'.$cat_item->id_cat_item,'method' => 'post']) !!}
                <div class="box-body">

                    <div class='form-group'>
                        {!! Form::label('nama kategori'); !!}
                        {{ Form::text('cat_name',$cat_item->cat_name, array_merge(['class' => 'form-control','placeholder'=>'nama_kategoti'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('status'); !!}
                        {{ Form::select('status', ['1' => 'Aktif', '0' => 'tidak aktif'], $cat_item->status,['class' => 'form-control']) }}
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
