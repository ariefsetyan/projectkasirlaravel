<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Roles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DataTables;
Use Alert;

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
                ->addColumn('action', function($role) {
                    return  view('roles.action',compact('role'))->render();
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('roles.index');
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

            $role = Role::create(['name' => $request->input('name')]);
            $role->syncPermissions($request->input('permission'));

            return redirect()->route('roles.index')->withSuccessMessage('success_message');
        }

    public function show($id)
    {
        $roles = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();
        return view('roles.show', compact('roles','rolePermissions'));
    }

    public function edit($id)
    {
        $roles = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        return view('roles.edit', compact('roles','permission','rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
        $roles = Role::find($id);

        $roles->name = $request->input('name');
        $roles->save();
        $roles->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $roles = Roles::find($id);

        Roles::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
