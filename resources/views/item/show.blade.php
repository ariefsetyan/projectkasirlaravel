@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush

@section('content')
    <section class="content">

        <div class="box">

            <div class="box-body">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">FORM Item</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id_item</strong>
                            {!!$item->id_item!!}
                        </div>
<div class='form-group'>
                            <strong>kode_item</strong>
                            {!!$item->kode_item!!}
                        </div>
<div class='form-group'>
                            <strong>nama_item</strong>
                            {!!$item->nama_item!!}
                        </div>
<div class='form-group'>
                            <strong>id_supplier</strong>
                            {!!$item->id_supplier!!}
                        </div>
<div class='form-group'>
                            <strong>id_cat_item</strong>
                            {!!$item->id_cat_item!!}
                        </div>
<div class='form-group'>
                            <strong>status</strong>
                            {!!$item->status!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$item->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$item->updated_at!!}
                        </div>

                        <div class="box-footer">
                        </div>


                    </div>
                </div>
            </div>
            <div class="box-footer">

            </div>
        </div>
    </section>
@endsection
@push('scriptdown')
    <script>

    </script>
@endpush
