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
        if (session('toast_success')){
            toast()->html('<h4>Success</h4>',"",'success');
        }
        $data = DB::table("information_schema.tables")->select('TABLE_NAME')->where('table_schema',env('DB_DATABASE'))->get();
        return view("builder.form",compact('data'));
    }

    public function cek(Request $request){
        if (file_exists(resource_path("/views/" . strtolower($request->table_name)))){
            echo 'ada';
        }else{
            echo "tidak ada";
        }
    }

    public function create(Request $request)
    {
//        dd($request->all());


        $resp = Artisan::call('crud:generator', ["name"=>ucfirst($request->table_name)]);
        return redirect('builder')->with('toast_success', 'success');
    }
}
