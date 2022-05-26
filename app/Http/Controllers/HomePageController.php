<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index()
    {
        return view('HomePage.index');
    }

    function profile()
    {
        return view('HomePage.profile');
    }
}
