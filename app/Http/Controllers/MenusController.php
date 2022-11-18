<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Menus;
use DataTables;
Use Alert;

class MenusController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Menus::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                                    return  view('menus.action',compact('row'))->render();
                                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Menus.index');
       }

    public function create()
    {
        return view('menus.form');
    }

    public function store(Request $request)
        {
            $menus = Menus::create($request->all());
            return redirect('menus')->withSuccessMessage('success_message');
        }

    public function show($id)
    {
        $menus = Menus::findOrFail($id);

        return view('Menus.show', compact('menus'));
    }

    public function edit($id)
    {
        $menus = Menus::findOrFail($id);

        return view('menus.edit', compact('menus'));
    }

    public function update(Request $request, $id)
    {
        $menus = Menus::find($id);

        $menus->update($request->all());

        return redirect('menus')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $menus = Menus::find($id);

        Menus::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
