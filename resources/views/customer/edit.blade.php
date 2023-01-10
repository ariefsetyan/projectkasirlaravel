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
                    <h3 class="box-title">FORM Customer</h3>
                </div>
                {!! Form::open(['url' => 'customer/update/'.$customer->id_customer,'method' => 'post']) !!}
                <div class="box-body">
                    <div class='form-group'>
                        {{ Form::hidden('id_customer',$customer->id_customer, array_merge(['class' => 'form-control','placeholder'=>'id_customer'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('nama_customer'); !!}
                        {{ Form::text('nama_customer',$customer->nama_customer, array_merge(['class' => 'form-control','placeholder'=>'nama_customer'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('telp'); !!}
                        {{ Form::text('telp',$customer->telp, array_merge(['class' => 'form-control','placeholder'=>'telp'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('alamat'); !!}
                        {{ Form::text('alamat',$customer->alamat, array_merge(['class' => 'form-control','placeholder'=>'alamat'])) }}
                     </div>
                    <div class='form-group'>
                        {!! Form::label('status'); !!}
                        {{ Form::select('status', ['1' => 'Aktif', '0' => 'tidak aktif'], '1',['class' => 'form-control']) }}
                    </div>

                    <table class="table table-bordered" id="dynamicAddRemove">
                        <tr>
                            <th>NOPOL</th>
                            <th>KENDARAAN</th>
                            <th>TIPE KENDARAAN</th>
                            <th>JENIS KENDARAAN</th>
                            <th>AKSI</th>
                        </tr>
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <input type="text" name="kendaraan[0][nopol]" placeholder="nopol" class="form-control" value="{{$row->nopol}}"/>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <input type="text" name="kendaraan[0][jendaraan]" placeholder="kendaran" class="form-control" />--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <input type="text" name="kendaraan[0][tipe]" placeholder="tipe" class="form-control" />--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <input type="text" name="kendaraan[0][jenis]" placeholder="jenis" class="form-control" />--}}
{{--                            </td>--}}
{{--                            <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add</button></td>--}}
{{--                        </tr>--}}
                    </table>
                </div>

            </div>

            <div class="box-footer">
                <a href="{{route('customer.index')}}" type="button" class="btn btn-default">Cencel</a>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection
@push('scriptdown')
    <script>
        var i = 0;
        @foreach($customer->kendaraan as $key=>$value)
            @if($key == 0)
        $("#dynamicAddRemove").append('<tr>' +
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][nopol]" placeholder="nopol" class="form-control" value=" {!! $value->nopol !!} "/>' +
            '</td>'+
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][jendaraan]" placeholder="kendaraan" class="form-control" value="{!! $value->nama_kendaran !!}" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][tipe]" placeholder="tipe" class="form-control" value="{!! $value->tipe_kendaran !!}" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][jenis]" placeholder="jenis" class="form-control" value="{!! $value->jenis_kendaran !!}" />' +
            '</td>' +
            '<td>' +
            '<button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add</button>' +
            '</td>' +
            '</tr>'
        );
        @else
        $("#dynamicAddRemove").append('<tr>' +
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][nopol]" placeholder="nopol" class="form-control" value=" {!! $value->nopol !!} "/>' +
            '</td>'+
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][jendaraan]" placeholder="kendaraan" class="form-control" value="{!! $value->nama_kendaran !!}" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][tipe]" placeholder="tipe" class="form-control" value="{!! $value->tipe_kendaran !!}" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="kendaraan[' + {!! $key !!} + '][jenis]" placeholder="jenis" class="form-control" value="{!! $value->jenis_kendaran !!}" />' +
            '</td>' +
            '<td>' +
            '<button type="button" class="btn btn-outline-danger remove-input-field">Delete</button>' +
            '</td>' +
            '</tr>'
        );
        @endif
            i={!! $key !!}
        @endforeach

        $("#dynamic-ar").click(function () {
            ++i;
            $("#dynamicAddRemove").append('<tr>' +
                '<td>' +
                '<input type="text" name="kendaraan[' + i + '][nopol]" placeholder="nopol" class="form-control" />' +
                '</td>'+
                '<td>' +
                '<input type="text" name="kendaraan[' + i + '][jendaraan]" placeholder="kendaraan" class="form-control" />' +
                '</td>' +
                '<td>' +
                '<input type="text" name="kendaraan[' + i + '][tipe]" placeholder="tipe" class="form-control" />' +
                '</td>' +
                '<td>' +
                '<input type="text" name="kendaraan[' + i + '][jenis]" placeholder="jenis" class="form-control" />' +
                '</td>' +
                '<td>' +
                '<button type="button" class="btn btn-outline-danger remove-input-field">Delete</button>' +
                '</td>' +
                '</tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
@endpush
