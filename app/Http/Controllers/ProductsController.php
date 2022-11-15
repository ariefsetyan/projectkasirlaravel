<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use DataTables;
Use Alert;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            toast('Success','success simpan');
        }
        if ($request->ajax()) {
            $data = Products::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = "<a href='".url('products/show',$row->id)."' class='edit btn btn-info btn-sm'>View</a>
                    <a href='".url('products/edit',$row->id)."' class='edit btn btn-warning btn-sm'>Edit</a>
                    <a href='".url('products/destroy',$row->id)."' class='edit btn btn-danger btn-sm'>Delete</a>
                   ";

                    return $btn;
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
            return redirect('products/index')->with('toast_success','message');
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

        return back()->with('toast_success','message');
    }
}
