<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Transaksi;
use Auth;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
     // create
     function create () {
        return view('HomePage.createPurchase')->with('tittle', 'Create Purchase');
    }

     // fungsi store 
     function store (Request $request) {
        $this->validate($request, [
            'qty' => 'required',
            'tanggal_beli' => 'required',
            'note' => 'required',
            'product' => 'required',
            'user'=>'required',
        ]);

        $transaksi = new Transaksi();
        $transaksi->qty = $request->qty;
        $transaksi->tanggal_beli = $request->tanggal_beli;
        $transaksi->note = $request->note;
        $transaksi->user_id = $request->user;
        $transaksi->product_id = $request->product;
       
        $transaksi->save();

        return redirect('/purchase');
    }

    function edit ($id) {
        $transaksi = Transaksi::find($id);
        return view('AdminView.DataSuplier.updatesuplier')->with('tittle', 'Edit Supplier')->with('suppliers', $transaksi);
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

   
     // fungsi delete
     function destroy ($id) {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/purchase');
    }
}
