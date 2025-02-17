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

    public function edit(Request $request, $id){
        $request->validate([
            'name' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        
        // Update nama jika diisi
        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        Session::flash('message', 'Berhasil Update Data');
        return redirect()->route('pengguna');
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}