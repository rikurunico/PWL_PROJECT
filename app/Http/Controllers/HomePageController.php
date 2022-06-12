<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('HomePage.index',['barang' => $data],['tittle' => 'Home Page',
        ]);
    }

    function profile()
    {
        return view('HomePage.profile',[],['tittle' => 'Profile Page']);
    }

    function gallery()
    {
        $data1 = Product::all();
        return view('HomePage.gallery',['galeri' => $data1], ['tittle' => 'Gallery Page']);
    }

    function contact()
    {
        return view('HomePage.contact', ['tittle' => 'Contact Page']);
    }   

    function updateDataUser(Request $request)
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
            return redirect('/profile') -> with('success', 'Data berhasil diubah');
        } else {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('/profile') -> with('success', 'Data berhasil diubah');
        }
    }

    function updateDataPassword(Request $request)
    {
        //validate laravel
        $this->validate($request,[
            'currentpassword'=> 'required|current_password|min:8|',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/profile') -> with('success', 'Password berhasil diubah');
    }

    function checkout()
    {
        return view('HomePage.checkout', ['tittle' => 'Checkout Page']);
    }
    
    function shopingcart()
    {
        return view('HomePage.shopingcart', ['tittle' => 'Shoping Card | Shop']);
    } 
}
