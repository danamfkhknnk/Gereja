<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Jemaat;
use App\Models\Penguruses;
use App\Models\Warta;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index(){

        $firman = Jemaat::all();
        $keyboard = Jemaat::all();
        $lcd = Jemaat::all();
        $wartaadd = warta::all();
        $wartasel = Warta::all();
        $jemaat = Jemaat::all();

        $jadwals = Jadwal::with('pembawafirman','keyboardjemaat','lcdjemaat')->where('status','selesai')->get();
        return view('Admin.Riwayat.Riwayat', compact('jadwals','wartasel','jemaat','firman','keyboard','lcd','wartaadd'));
    }
}