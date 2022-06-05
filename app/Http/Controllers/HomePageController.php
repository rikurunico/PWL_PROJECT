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
        return view('HomePage.contact',[], ['tittle' => 'Contact Page']);
    }

    function updateDataUser(Request $request)
    {
        
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->notelp = $request->notelp;
        $user->alamat = $request->alamat;

        $user->save();
        return redirect('/profile');
    }
}
