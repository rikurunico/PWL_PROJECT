<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('HomePage');
        }
        return redirect()->route('LoginPage');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('LoginPage');
    }
}
