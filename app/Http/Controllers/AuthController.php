<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'role' => 'required',
        ]);
    
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect ('/login')->with('success','Registrasi berhasil');


    }
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validateData)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/pelanggan')->with('success','Anda login sebagai admin');
            
            } else {
                return redirect('/landing')->with('success','Login berhasil');
            }
        }

        return back()->withErrors([
            'email' => 'email atau password salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success','Anda berhasil logout');
    }
}
