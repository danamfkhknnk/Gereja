<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Keuangan;
use App\Models\Persembahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PersembahanController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'jumlah' => 'required',
        ]);

        $persembahan = Persembahan::create($request->all());

        $jadwal = Jadwal::findOrFail($request->jadwal_id);

    // Tambahkan data ke tabel keuangan
        Keuangan::create([
            'jadwal_id' => $request->jadwal_id,
            'persembahan_id' => $persembahan->id, // ID dari persembahan yang baru ditambahkan
            'tanggal' => $jadwal->waktu, // Menggunakan waktu dari tabel jadwal
            'keterangan' => $request->tipe, // Menggunakan tipe dari persembahan
            'jumlah' => $request->jumlah, // Menggunakan jumlah dari persembahan
            'status' => 'masuk', // Atur status sesuai kebutuhan
        ]);

        Session::flash('message', 'Tambah Data Berhasil');
        
        return redirect()->route('riwayat');
    }

    public function delete($id){


        $persembahan = Persembahan::findOrFail($id);
        $persembahan->keuangan()->delete();
        $persembahan->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('riwayat');
    }

}