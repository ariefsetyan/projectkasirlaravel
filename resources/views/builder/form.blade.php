@extends('layouts.app')

@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM BUILDER</h3>

                <div class="box-tools pull-right">

                </div>
            </div>
            {!! Form::open(['url' => 'builder/create','method' => 'post']) !!}
            <div class="box-body">
                <div class="box-body">
                    <div class="form-group">
                        <label>Database</label>
                        <select class="form-control select2" style="width: 100%;" name="table_name">
                            @foreach($data as $row)
                                <option value="{{$row->TABLE_NAME}}">{{$row->TABLE_NAME}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Build</button>
            </div>
                {!! Form::close() !!}
        </div>
    </section>
@endsection
@push('scriptdown')
    <script>
        $('.select2').select2()
    </script>
@endpush
