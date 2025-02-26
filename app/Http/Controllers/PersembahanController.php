<?php

namespace App\Http\Controllers;

use App\Models\Persembahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PersembahanController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'jumlah' => 'required',
        ]);

        Persembahan::create($request->all());
        Session::flash('message', 'Tambah Data Berhasil');
        
        return redirect()->route('riwayat');
    }

    public function delete($id){
        $persembahan = Persembahan::findOrFail($id);
        $persembahan->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('riwayat');
    }

}