<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BuilderController extends Controller
{
    public function index()
    {
        if (session('success_message')){
            Alert::success('Success', 'Build Success');
        }
        $data = DB::table("information_schema.tables")->select('TABLE_NAME')->where('table_schema',env('DB_DATABASE'))->get();
        return view("builder.form",compact('data'));
    }

    public function create(Request $request)
    {
        $resp = Artisan::call('crud:generator', ["name"=>ucfirst($request->table_name)]);
        return redirect('builder')->withSuccessMessage('success_message');
    }
}
