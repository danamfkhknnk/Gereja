<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(){

        $info = Informasi::where('id', '1')->get();

        return view('Admin.Informasi.Informasi', compact('info'));
    }
}