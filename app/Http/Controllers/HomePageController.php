<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index()
    {
        return view('HomePage.index',['tittle' => 'Home Page',
        ]);
    }

    function profile()
    {
        return view('HomePage.profile',['tittle' => 'Profile Page']);
    }
}
