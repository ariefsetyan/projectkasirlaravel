<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use App\Models\Roles;
use DataTables;
Use Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    function __construct()
        {
            $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Role::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = "<a href='".url('roles/show',$row->id)."' class='edit btn btn-info btn-sm'>View</a>
                    <a href='".url('roles/edit',$row->id)."' class='edit btn btn-warning btn-sm'>Edit</a>
                    <a href='".url('roles/destroy',$row->id)."' class='edit btn btn-danger btn-sm'>Delete</a>
                   ";

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Roles.index');
       }

    public function create()
    {
        $permission = Permission::get();
        return view('roles.form',compact('permission'));
    }

    public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|unique:roles,name',
                'permission' => 'required',
            ]);
            $roles = Roles::create(['name'=>$request->name]);
            $roles->syncPermissions($request->input('permission'));
            return redirect('roles/index')->withSuccessMessage('success_message');
        }

    public function show($id)
    {
        $roles = Roles::findOrFail($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        return view('Roles.show', compact('roles'));
    }

    public function edit($id)
    {
        $roles = Roles::findOrFail($id);

        return view('roles.edit', compact('roles'));
    }

    public function update(Request $request, $id)
    {
        $roles = Roles::find($id);

        $roles->update($request->all());

        return redirect('roles/index')->withSuccessMessage('success_message')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $roles = Roles::find($id);

        Roles::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
