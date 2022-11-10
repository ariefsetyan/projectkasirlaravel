@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush

@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM Products</h3>

                <div class="box-tools pull-right">

                </div>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>
                        <div class='form-group'>
                            <strong>id</strong>
                            {!!$products->id!!}
                        </div>
<div class='form-group'>
                            <strong>name</strong>
                            {!!$products->name!!}
                        </div>
<div class='form-group'>
                            <strong>detail</strong>
                            {!!$products->detail!!}
                        </div>
<div class='form-group'>
                            <strong>created_at</strong>
                            {!!$products->created_at!!}
                        </div>
<div class='form-group'>
                            <strong>updated_at</strong>
                            {!!$products->updated_at!!}
                        </div>

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
