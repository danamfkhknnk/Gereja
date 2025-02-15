<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Util\Regex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    public function login (){
        return view('Component.Login');
    }

    public function index(){

        $pengguna = User::all();

        return view('Admin.Pengguna.Pengguna', compact('pengguna'));
    }
    public function register(Request $request){
        $request->validate( [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        User::create( attributes : $request->only('name','password'));
        // // Flash message untuk sukses
        Session::flash('message', 'Registrasi Berhasil, Silahkan Cek Email Anda untuk Verifikasi.');

        return redirect()->route('login');
    }

    public function aksilogin(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'Name wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);
        $infologin = [
            'name'=>$request->name,
            'password'=>$request->password,
        ];
        if(Auth::attempt($infologin)) {
            return redirect('/admin/dashboard');
        }else{
            return redirect('/login')->withErrors('Email dan password yang dimasukkan salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}