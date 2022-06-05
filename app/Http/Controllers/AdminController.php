<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    function index()
    {
        $dataMember = User::all();
        $dataMember = User::orderBy('level', 'asc')->paginate(5);
        return view('AdminView.index',['tittle' => 'Home Page Admin',
            'dataMember' => $dataMember,
        ]);
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
}
