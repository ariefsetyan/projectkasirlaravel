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
                            <h3 class="box-title">FORM Menus</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id</strong>
                            {!!$menus->id!!}
                        </div>
<div class='form-group'>
                            <strong>name_menu</strong>
                            {!!$menus->name_menu!!}
                        </div>
<div class='form-group'>
                            <strong>url</strong>
                            {!!$menus->url!!}
                        </div>
<div class='form-group'>
                            <strong>route</strong>
                            {!!$menus->route!!}
                        </div>
<div class='form-group'>
                            <strong>icon</strong>
                            {!!$menus->icon!!}
                        </div>
<div class='form-group'>
                            <strong>is_active</strong>
                            {!!$menus->is_active!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$menus->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$menus->updated_at!!}
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
