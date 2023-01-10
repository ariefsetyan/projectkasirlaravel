<?php

namespace App\Http\Controllers;

use App\Models\Cat_item;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Item;
use DataTables;
Use Alert;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Item::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                                    return  view('item.action',compact('row'))->render();
                                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Item.index');
       }

    public function create()
    {
        $supplier = Supplier::where('status','1')->pluck('nama_supplier','id_supplier')->toArray();
        $cat = Cat_item::where('status','1')->pluck('cat_name','id_cat_item')->toArray();
        return view('item.form',compact('supplier','cat'));
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return redirect('item')->withSuccessMessage('success_message');
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);

        return view('Item.show', compact('item'));
    }

    public function edit($id)
    {
        $supplier = Supplier::where('status','1')->pluck('nama_supplier','id_supplier')->toArray();
        $cat = Cat_item::where('status','1')->pluck('cat_name','id_cat_item')->toArray();
        $item = Item::findOrFail($id);
        return view('item.edit', compact('item','supplier','cat'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);

        $item->update($request->all());

        return redirect('item')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $item = Item::find($id);

        Item::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
