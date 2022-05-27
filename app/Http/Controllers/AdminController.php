<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function index()
    {
        $dataMember = User::all();
        $dataMember = User::orderBy('level', 'asc')->paginate(5);
        return view('AdminView.index',['tittle' => 'Home Page',
            'dataMember' => $dataMember,
        ]);
    }
}
