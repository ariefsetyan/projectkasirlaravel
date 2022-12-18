@extends('layouts.app')

@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM BUILDER</h3>

                <div class="box-tools pull-right">

                </div>
            </div>
            {!! Form::open(['url' => 'builder/create','method' => 'post','id'=>'form_builder']) !!}
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
                <button type="submit" class="btn btn-primary" id="build">Build</button>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection
@push('scriptdown')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>

        $('.select2').select2()

        $("#builder").click(function (event) {
            let url = $('#form_builder').attr('action')
            let method = $('#form_builder').attr('method')
            let input = $("#form_builder").serialize();
            // console.log(url)

            function genetare() {
                // alert(url)
                $("form").submit();
                // form.submit();
                // $.ajax({
                //     url:url,
                //     type:method,
                //     data:input,
                //     success:function (data) {
                //         // location.reload();
                //     }
                // })
            }


            // $.ajaxSetup({
            //
            //     headers: {
            //
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //
            //     }
            //
            // });

            $.ajax({
                url:"{!! route('builder.cek') !!}",
                type:'POST',
                data:input,
                success:function (data) {
                    console.log(data)
                    if (data != 'tidak ada'){
                        event.preventDefault();
                        swal({
                            title: `Apakah anda yakin untuk di build ulang`,
                            text: "Jika di build ulang perubahan pada controller, view, model akan di hapus",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                            .then((willBuil) => {
                                if (willBuil) {
                                    $("form").submit();
                                    // genetare()
                                    // form.submit();
                                }
                            });
                    }else{
                        $("form").submit();
                        // genetare()
                    }
                }
            })
        })
    </script>
@endpush
