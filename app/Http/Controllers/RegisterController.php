<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Storage;

class RegisterController extends Controller
{
    public function index()
    {
        return view('LoginPage.register', [
            'tittle' => 'Register Page',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'nomor' => 'required|unique:users,notelp',
        ]);


        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->notelp = $request->nomor;
        $user->password = bcrypt($request->password);
        $user->level = 'user';
        $img = \DefaultProfileImage::create($request->name, 256, '#000', '#FFF');
            Storage::disk('public')->put("profile.png", $img -> encode());
        $user->foto = 'profile.png';
        $user->save();

        return redirect('/login')->with('success', 'Registration Success! Please Login');
    }
}
