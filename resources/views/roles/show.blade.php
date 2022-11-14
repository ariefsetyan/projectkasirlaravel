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
                            <h3 class="box-title">FORM Roles</h3>
                        </div>
                        <div class="box-tools pull-right">

                        </div>

                        <div class='form-group'>
                            <strong>id</strong>
                            {!!$roles->id!!}
                        </div>
<div class='form-group'>
                            <strong>name</strong>
                            {!!$roles->name!!}
                        </div>
<div class='form-group'>
                            <strong>guard_name</strong>
                            {!!$roles->guard_name!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$roles->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$roles->updated_at!!}
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
