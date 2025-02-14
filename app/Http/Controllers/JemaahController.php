<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JemaahController extends Controller
{
    public function index(){
        return view('Admin.Jemaah.Jemaah');
    }
}