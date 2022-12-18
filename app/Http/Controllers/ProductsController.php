<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use DataTables;
Use Alert;

class ProductsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:products-list|products-create|products-edit|role-delete', ['only' => ['index','store']]);
        $this->middleware('permission:products-create', ['only' => ['create','store']]);
        $this->middleware('permission:products-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:products-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Products::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                                    return  view('products.action',compact('row'))->render();
                                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Products.index');
       }

    public function create()
    {
        return view('products.form');
    }

    public function store(Request $request)
        {
            $products = Products::create($request->all());
            return redirect('products')->withSuccessMessage('success_message');
        }

    public function show($id)
    {
        $products = Products::findOrFail($id);

        return view('Products.show', compact('products'));
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);

        return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Products::find($id);

        $products->update($request->all());

        return redirect('products')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $products = Products::find($id);

        Products::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
