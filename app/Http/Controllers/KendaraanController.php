<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kendaraan;
use DataTables;
Use Alert;

class KendaraanController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Kendaraan::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                                    return  view('kendaraan.action',compact('row'))->render();
                                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Kendaraan.index');
       }

    public function create()
    {
        return view('kendaraan.form');
    }

    public function store(Request $request)
    {
        $kendaraan = Kendaraan::create($request->all());
        return redirect('kendaraan')->withSuccessMessage('success_message');
    }

    public function show($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        return view('Kendaraan.show', compact('kendaraan'));
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::find($id);

        $kendaraan->update($request->all());

        return redirect('kendaraan')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $kendaraan = Kendaraan::find($id);

        Kendaraan::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
