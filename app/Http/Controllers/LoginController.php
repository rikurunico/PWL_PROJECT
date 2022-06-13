<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $remember_me = $request->remember ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
            
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->route('HomePageAdmin');
            } 

            if ($user->level == 'user') {
                return redirect()->route('HomePage');
            } 
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('LoginPage');
    }
}