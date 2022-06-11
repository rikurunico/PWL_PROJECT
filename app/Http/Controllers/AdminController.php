<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Transaksi;
use Auth;
use PDF;

class AdminController extends Controller
{
    function index()
    {
        $dataMember = User::orderBy('level', 'asc')->where('level', 'user')->paginate(5);
        return view('AdminView.index',['tittle' => 'Home Page Admin',
            'dataMember' => $dataMember,
        ]);
    }
    function profile()
    {
        return view('AdminView.profile',[],['tittle' => 'Profile Page']);
    }

    function dataproduct()
    {
        $dataProduk = Product::all();
        $dataProduk = Product::orderBy('id', 'asc')->paginate(5);
        return view('AdminView.dataProduct',['tittle' => 'Data Product',
            'dataProduct' => $dataProduk,
        ]);
    }

    function contact()
    {
        return view('AdminView.contact',[], ['tittle' => 'Contact Admin']);
    }

    function datasupplier()
    {
        $dataSupplier = Supplier::all();
        $dataSupplier = Supplier::orderBy('id', 'asc')->paginate(3);
        return view('AdminView.dataSuplier',['tittle' => 'Data Supplier',
            'dataSupplier' => $dataSupplier,
        ]);
    }
    function datapenjualan()
    {
        $dataPenjualan = Transaksi::all();
        $dataPenjualan = Transaksi::orderBy('id', 'asc')->paginate(3);
        return view('AdminView.dataPenjualan',['tittle' => 'Data Penjualan',
            'dataPenjualan' => $dataPenjualan,
        ]);
    }

    
    function updateDataAdmin(Request $request)
    {
        //validate laravel
        $this->validate($request,[
            'email' => 'email|unique:users,email,'.Auth::user()->id,
            'notelp' => 'numeric|unique:users,notelp,'.Auth::user()->id,
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request -> hasFile('foto')){
            $foto = $request->file('foto')->store('photoUser', 'public');
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->foto = $foto;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('/profileAdmin') -> with('success', 'Data berhasil diubah');
        } else {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('/profileAdmin') -> with('success', 'Data berhasil diubah');
        }
    }

    function edit($id)
    {
        $user = User::find($id);
        return view('AdminView.editDataUser',['tittle' => 'Edit Data User',
            'user' => $user,
        ]);
    }

    function updateDataUser(Request $request, $id)
    {
        //validate laravel

        $this->validate($request,[
            'email' => 'email|unique:users,email,'.$id,
            'notelp' => 'numeric|unique:users,notelp,'.$id,
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request -> hasFile('foto')){
            $foto = $request->file('foto')->store('photoUser', 'public');
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->foto = $foto;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->level = $request->level;
            $user->save();
            return redirect('/homeAdmin') -> with('success', 'Data berhasil diubah');
        } else {
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->level = $request->level;
            $user->save();
            return redirect('/homeAdmin') -> with('success', 'Data berhasil diubah');
        }

    }

    function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/homeAdmin');
    }

    function cetakDataUser()
    {
        $dataUser = User::all();
        $pdf = PDF::loadView('AdminView.cetakDataUser',['dataUser' => $dataUser]);
        return $pdf->download('Data User.pdf');
    }
}
