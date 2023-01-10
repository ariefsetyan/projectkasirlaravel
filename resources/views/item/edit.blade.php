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
                    <h3 class="box-title">FORM Item</h3>
                </div>
                {!! Form::open(['url' => 'item/update/'.$item->id_item,'method' => 'post']) !!}
                <div class="box-body">
                    <div class='form-group'>
                        {{ Form::hidden('id_item',$item->id_item, array_merge(['class' => 'form-control','placeholder'=>'id_item'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('kode_item'); !!}
                        {{ Form::text('kode_item',$item->kode_item, array_merge(['class' => 'form-control','placeholder'=>'kode_item'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('nama_item'); !!}
                        {{ Form::text('nama_item',$item->nama_item, array_merge(['class' => 'form-control','placeholder'=>'nama_item'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('id_supplier'); !!}
                        {{ Form::select('id_supplier', $supplier, $item->id_supplier,['class' => 'form-control']) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('id_cat_item'); !!}
                        {{ Form::select('id_cat_item', $cat, $item->id_cat_item,['class' => 'form-control']) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('status'); !!}
                        {{ Form::select('status', ['1' => 'Aktif', '0' => 'tidak aktif'], $item->status,['class' => 'form-control']) }}

                     </div>
                </div>

            </div>

            <div class="box-footer">
                <a href="{{route('item.index')}}" type="button" class="btn btn-default">Cencel</a>
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
