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
                            <h3 class="box-title">FORM Cat_item</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id_cat_item</strong>
                            {!!$cat_item->id_cat_item!!}
                        </div>
<div class='form-group'>
                            <strong>cat_name</strong>
                            {!!$cat_item->cat_name!!}
                        </div>
<div class='form-group'>
                            <strong>status</strong>
                            {!!$cat_item->status!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$cat_item->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$cat_item->updated_at!!}
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
