<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Persembahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeuanganController extends Controller
{
    public function index(Request $request){

        $bulanTahun = $request->input('cari');

        $totalPemasukan = Keuangan::when($bulanTahun, function ($query) use ($bulanTahun) {
            return $query->whereMonth('tanggal', substr($bulanTahun, 5, 2))
                         ->whereYear('tanggal', substr($bulanTahun, 0, 4));
        })
        ->where('status', 'masuk') // Hanya ambil yang berstatus 'masuk'
        ->sum('jumlah'); // Mengambil total jumlah dari kolom jumlah di tabel Keuangan
    
        // Mengambil total pengeluaran dari tabel Keuangan
        $totalPengeluaran = Keuangan::when($bulanTahun, function ($query) use ($bulanTahun) {
                return $query->whereMonth('tanggal', substr($bulanTahun, 5, 2))
                            ->whereYear('tanggal', substr($bulanTahun, 0, 4));
            })
            ->where('status', 'keluar') // Hanya ambil yang berstatus 'keluar'
            ->sum('jumlah'); // Mengambil total jumlah dari kolom jumlah di tabel Keuangan
        
        // Menghitung jumlah yang masuk
        $jumlahMasuk = $totalPemasukan - $totalPengeluaran;

        $keuangan = Keuangan::with('jadwal','persembahan')->when($bulanTahun, function ($query) use ($bulanTahun) {
            return $query->whereMonth('tanggal', substr($bulanTahun, 5, 2))
                         ->whereYear('tanggal', substr($bulanTahun, 0, 4));
        })->get();

        return view('Admin.Keuangan.Keuangan', compact('keuangan','jumlahMasuk'));
    }

    public function pengeluaran(Request $request){
        $request->validate([
            'jumlah' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required|date|after_or_equal:now',
        ]);

        Keuangan::create($request->all());

        Session::flash('message', 'Tambah Data Berhasil');
        
        return redirect()->route('keuangan');
    }


    public function deletePersembahan($id){
        $persembahan = Persembahan::findOrFail($id);
        $persembahan->keuangan()->delete();
        $persembahan->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('keuangan');
    }

    public function delete($id){
        $keuangan = Keuangan::findOrFail($id);
        $keuangan->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('keuangan');
    }
}