<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cat_item;
use DataTables;
Use Alert;

class Cat_itemController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Cat_item::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    return  view('cat_item.action',compact('row'))->render();
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Cat_item.index');
       }

    public function create()
    {
        return view('cat_item.form');
    }

    public function store(Request $request)
    {
        $cat_item = Cat_item::create($request->all());
        return redirect('cat_item')->withSuccessMessage('success_message');
    }

    public function show($id)
    {
        $cat_item = Cat_item::findOrFail($id);

        return view('Cat_item.show', compact('cat_item'));
    }

    public function edit($id)
    {
        $cat_item = Cat_item::findOrFail($id);

        return view('cat_item.edit', compact('cat_item'));
    }

    public function update(Request $request, $id)
    {
        $cat_item = Cat_item::find($id);

        $cat_item->update($request->all());

        return redirect('cat_item')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $cat_item = Cat_item::find($id);

        Cat_item::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
