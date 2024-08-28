<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function index()
    {
        return view("session/index");
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'password.required' => 'Password harus diisi',
        ]);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($infologin)) {
            return redirect('/home');
        } else {
            return redirect('/session')->withErrors(['loginError' => 'Email atau Password salah']);
        }
    }    

    public function logout()
    {
        Auth::logout();
        return redirect('/session');
    }

    public function register()
    {
        return view('session.register');
    }

    public function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama Pengguna harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah digunakan, silahkan masukkan email lainnya',
            'password.required' => 'Kata sandi harus diisi',
            'password.min' => 'Kata sandi setidaknya mengandung 6 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/home');
        } else {
            return redirect('/session')->with('error', 'Email atau Password salah');
        }
    }
}
