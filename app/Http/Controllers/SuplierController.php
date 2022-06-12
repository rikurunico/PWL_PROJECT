<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Supplier;
use PDF;

class SuplierController extends Controller
{
    function create () {
        return view('AdminView.DataSuplier.create')->with('tittle', 'Create Supplier');
    }

    function store (Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required|unique:suppliers',
        ]);

        $suppliers = new Supplier;
        $suppliers->nama = $request->nama;
        $suppliers->alamat = $request->alamat;
        $suppliers->telp = $request->telp;
        $suppliers->save();

        return redirect('/dataSupplier');
    }

    function edit ($id) {
        $suppliers = Supplier::find($id);
        return view('AdminView.DataSuplier.updatesuplier')->with('tittle', 'Edit Supplier')->with('suppliers', $suppliers);
    }

    function updateDataSupplier (Request $request, $id) {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required|unique:suppliers,telp,'.$id,
        ]);

        $suppliers = Supplier::find($id);
        $suppliers->nama = $request->nama;
        $suppliers->alamat = $request->alamat;
        $suppliers->telp = $request->telp;
        $suppliers->save();

        return redirect('/dataSupplier');
    }

    function destroy ($id) {
        $suppliers = Supplier::find($id);
        $suppliers->delete();
        return redirect('/dataSupplier');
    }

    function cetakDataSupplier()
    {
        $datasupplier = Supplier::all();
        $pdf = PDF::loadView('AdminView.DataSuplier.cetakDataSupplier',['datasupplier' => $datasupplier]);
        return $pdf->download('Data Supplier.pdf');
    }
}
