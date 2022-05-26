<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        try{
            $validator = $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8'
            ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->level = 'user';
            $user->save();
    
            return redirect('/login')->with('success', 'Registrasi Anda Berhasil! Silahkan Login');
        }
        catch(\Exception $e){
            return redirect('/register')->with('error', 'Data Yang Anda Masukkan Sudah Ada Atau Salah');
        }
    }
}
