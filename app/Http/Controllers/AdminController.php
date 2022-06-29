<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Transaksi;
use Auth;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class AdminController extends Controller
{
    function index()
    {
        $dataMember = User::orderBy('level', 'asc')->where('level', 'user')->paginate(2);
        return view('AdminView.index',['tittle' => 'Home Page Admin',
            'dataMember' => $dataMember,
        ]);
    }
    function profile()
    {
        return view('AdminView.profile',['tittle' => 'Profile Page']);
    }

    function dataproduct()
    {
        $dataProduct = Product::with('suppliers')->orderBy('id', 'asc')->paginate(5);
        return view('AdminView.dataProduct',['tittle' => 'Data Product',
            'dataProduct' => $dataProduct,
        ]);
    }

    function contact()
    {
        return view('AdminView.contact', ['tittle' => 'Contact Admin']);
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
        $dataPenjualan = Transaksi::with('products')->orderBy('id', 'asc')->paginate(5);
        return view('AdminView.dataPenjualan',['tittle' => 'Data Penjualan',
            'dataPenjualan' => $dataPenjualan,
        ]);
    }

    function editDataPenjualan($id)
    {
        $dataPenjualan = Transaksi::find($id);
        return view('AdminView.editDataPenjualan',['tittle' => 'Edit Data Penjualan',
            'dataPenjualan' => $dataPenjualan,
        ]);
    }

    function updateDataPenjualan(Request $request, $id)
    {
        $dataPenjualan = Transaksi::find($id);
        $dataPenjualan->update($request->all());
        return redirect('/dataPenjualan');
    }

    function deleteDataPenjualan($id)
    {
        $dataPenjualan = Transaksi::find($id);
        $dataPenjualan->delete();
        return redirect('/dataPenjualan');
    }

    function cetakDataPenjualan(){
        $dataPenjualan = Transaksi::all();
        $dataPenjualan = Transaksi::with('products')->orderBy('id', 'asc')->get();
        $pdf = PDF::loadView('AdminView.cetakDataPenjualan',['tittle' => 'Data Penjualan',
            'dataPenjualan' => $dataPenjualan,
        ]);
        return $pdf->download('Data Penjualan.pdf');
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

    function updateDataPassword(Request $request)
    {
        //validate laravel
        $this->validate($request,[
            'currentpassword'=> 'required|current_password|',
            'password' => 'required|confirmed',
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/profileAdmin') -> with('success', 'Password berhasil diubah');
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

    // create data user
    public function createUser()
    {
        return view('AdminView.createDataUser',['tittle' => 'Create Data User' 
    ]);
    }
    // fungsi store data user
    public function storeUser(Request $request)
    {
       
       //melakukan validasi data
       $request->validate([
        'name' => 'required',
        'email' => ['required', 'email:dns', 'unique:users,email,'],
        'notelp' => ['required', 'numeric', 'unique:users,notelp,'],
        'alamat' => 'required',
        'level' => 'required',
        'password' => 'required',
        'foto'=>'required',

        ]);

        if($request->file('foto')){
            $image_name = $request->file('foto')->store('image', 'public');
        }

        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->foto = $image_name;
        $user->notelp = $request->get('notelp');
        $user->alamat = $request->get('alamat');
        $user->level = $request->get('level');
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/homeAdmin') -> with('success', 'Data berhasil Ditambahkan');
    }

    public function searching(Request $request)
    {
        //Menangkap data pencarian
        $search = $request->search;
        $user = User::where ('name','like',"%".$search."%");
        return view ('HomePage.gallery',['users' => $user]);
      
    }
}
