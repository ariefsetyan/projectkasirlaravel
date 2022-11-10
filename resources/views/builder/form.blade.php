@extends('layouts.app')

@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM BUILDER</h3>

                <div class="box-tools pull-right">

                </div>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'builder/create','method' => 'post']) !!}
                            <div class="box-body" method="post">
                                <div class="form-group">
                                    <label>Database</label>
                                    <select class="form-control select2" style="width: 100%;" name="table_name">
                                        @foreach($data as $row)
                                            <option value="{{$row->TABLE_NAME}}">{{$row->TABLE_NAME}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
        $('.select2').select2()
    </script>
@endpush;
