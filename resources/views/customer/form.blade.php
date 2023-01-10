@extends('layouts.app')
@push('styles')

@endpush
@push('script')

@endpush
@section('content')
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">FORM customers</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            {!! Form::open(['url' => 'customer/store','method' => 'post']) !!}

            <div class="box-body">
                <div class='form-group'>
                    {!! Form::label('nama_customer'); !!}
                    {{ Form::text('nama_customer', null, array_merge(['class' => 'form-control','placeholder'=>'nama_customer'])) }}
                 </div>
                <div class='form-group'>
                    {!! Form::label('telp'); !!}
                    {{ Form::text('telp', null, array_merge(['class' => 'form-control','placeholder'=>'telp'])) }}
                 </div>
                <div class='form-group'>
                    {!! Form::label('alamat'); !!}
                    {{ Form::textarea('alamat', null, array_merge(['class' => 'form-control','placeholder'=>'alamat'])) }}
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

                </table>
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
    <script type="text/javascript">
        var i = 0;
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
            '<button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add</button>' +
            '</td>' +
            '</tr>'
        );
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
