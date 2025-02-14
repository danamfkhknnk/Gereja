<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function login (){
        return view('Component.Login');
    }

    public function index(){
        return view('Admin.Pengguna.Pengguna');
    }
}