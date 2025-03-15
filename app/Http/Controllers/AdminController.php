<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Jemaat;
use App\Models\Keuangan;
use App\Models\Warta;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $jemaat = Jemaat::count();
        $masuk = Keuangan::where('status','masuk')->sum('jumlah');
        $keluar = Keuangan::where('status','keluar')->sum('jumlah');
        $warta = Warta::count();
        $kegiatan = Jadwal::where('status','selesai')->count();
        $total = $masuk - $keluar;
        return view('Admin.Dashboard',compact('jemaat','total','warta','kegiatan'));
    }
}