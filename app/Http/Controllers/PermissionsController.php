<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Permissions;
use DataTables;
Use Alert;

class PermissionsController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Permissions::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                                    return  view('permissions.action',compact('row'))->render();
                                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Permissions.index');
       }

    public function create()
    {
        return view('permissions.form');
    }

    public function store(Request $request)
        {
            $permissions = Permissions::create($request->all());
            return redirect('permissions')->withSuccessMessage('success_message');
        }

    public function show($id)
    {
        $permissions = Permissions::findOrFail($id);

        return view('Permissions.show', compact('permissions'));
    }

    public function edit($id)
    {
        $permissions = Permissions::findOrFail($id);

        return view('permissions.edit', compact('permissions'));
    }

    public function update(Request $request, $id)
    {
        $permissions = Permissions::find($id);

        $permissions->update($request->all());

        return redirect('permissions')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $permissions = Permissions::find($id);

        Permissions::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
