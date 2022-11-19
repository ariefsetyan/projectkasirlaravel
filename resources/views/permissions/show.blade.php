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
                            <h3 class="box-title">FORM Permissions</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id</strong>
                            {!!$permissions->id!!}
                        </div>
<div class='form-group'>
                            <strong>name</strong>
                            {!!$permissions->name!!}
                        </div>
<div class='form-group'>
                            <strong>guard_name</strong>
                            {!!$permissions->guard_name!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$permissions->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$permissions->updated_at!!}
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
