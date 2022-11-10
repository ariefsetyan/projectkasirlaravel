<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class BuilderController extends Controller
{
    public function index()
    {
        $data = DB::table("information_schema.tables")->select('TABLE_NAME')->where('table_schema',env('DB_DATABASE'))->get();
        return view("builder.form",compact('data'));
    }

    public function create(Request $request)
    {
        Artisan::call('crud:generator', ["name"=>ucfirst($request->table_name)]);
    }
}
