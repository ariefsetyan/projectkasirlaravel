<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Supplier;
use DataTables;
Use Alert;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Supplier::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                                    return  view('supplier.action',compact('row'))->render();
                                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Supplier.index');
       }

    public function create()
    {
        return view('supplier.form');
    }

    public function store(Request $request)
    {
        $supplier = Supplier::create($request->all());
        return redirect('supplier')->withSuccessMessage('success_message');
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('Supplier.show', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        $supplier->update($request->all());

        return redirect('supplier')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        Supplier::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
