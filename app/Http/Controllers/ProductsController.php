<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use DataTables;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Products::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = "<a href='".url('products/show',$row->id)."' class='edit btn btn-info btn-sm'>View</a>
                    <a href='".url('products/edit',$row->id)."' class='edit btn btn-primary btn-sm'>Edit</a>
                    <a href='".url('products/destroy',$row->id)."' class='edit btn btn-primary btn-sm'>Delete</a>
                   ";

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Products.index');
        //$products = Products::all();
        //return view('Products.index',compact('products'));
       }

    public function create()
    {
        return view('products.form');
    }

    public function store(Request $request)
        {
            $products = Products::create($request->all());
            return redirect('products/index');
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

        return view('products.index');
    }

    public function delete(Request $request, $id)
    {
        $products = Products::find($id);
        if(!$products){
            return response()->json([
                'code' => 200,
                'status' => false,
                'message' => "Failed"
            ], 200);
        }
        Products::destroy($id);

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success"
        ], 200);
    }
}
