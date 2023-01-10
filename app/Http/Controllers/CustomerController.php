<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Menus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use DataTables;
Use Alert;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if(session("success_message")){
            Alert::success('Success', 'Data Berhasil Disimpan');
        }
        if ($request->ajax()) {
            $data = Customer::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                                    return  view('customer.action',compact('row'))->render();
                                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Customer.index');
       }

    public function create()
    {
        return view('customer.form');
    }

    public function store(Request $request)
    {
        $customer = Customer::create([
            'nama_customer'=>$request->nama_customer,
            'telp'=>$request->telp,
            'alamat'=>$request->alamat,
            'status'=>$request->status,
        ]);

        if (!empty($request->kendaraan)){
            foreach ($request->kendaraan as $row){
                $kendaran = Kendaraan::create([
                    'nopol'=>$row['nopol'],
                    'nama_kendaran'=>$row['jendaraan'],
                    'tipe_kendaran'=>$row['tipe'],
                    'jenis_kendaran'=>$row['jenis'],
                    'id_customer'=>$customer->id_customer
                ]);

            }

        }
        return redirect('customer')->withSuccessMessage('success_message');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);

        return view('Customer.show', compact('customer'));
    }

    public function edit($id)
    {

        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update([
            'nama_customer'=>$request->nama_customer,
            'telp'=>$request->telp,
            'alamat'=>$request->alamat,
            'status'=>$request->status,
        ]);

        $kendaraan = Kendaraan::where('id_customer',$id)->delete();
        foreach ($request->kendaraan as $row){
            $kendaran = Kendaraan::create([
                'nopol'=>$row['nopol'],
                'nama_kendaran'=>$row['jendaraan'],
                'tipe_kendaran'=>$row['tipe'],
                'jenis_kendaran'=>$row['jenis'],
                'id_customer'=>$id
            ]);
        }

        return redirect('customer')->withSuccessMessage('success_message');
    }

    public function destroy(Request $request, $id)
    {
        $customer = Customer::find($id);

        Customer::destroy($id);

        return back()->withSuccessMessage('success_message');
    }
}
