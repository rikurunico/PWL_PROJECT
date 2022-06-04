<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

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


}
