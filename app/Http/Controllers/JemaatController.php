<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JemaatController extends Controller
{
    public function index(){
        $jemaat = Jemaat::all();
        return view('Admin.Jemaat.Jemaat', compact('jemaat'));
    }

    public function add(Request $request ){
        $request->validate( [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Jemaat::create($request->all());
        
        // // Flash message untuk sukses
        Session::flash('message', 'Berhasil Tambah Data');
        return redirect()->route('jemaat');
    }

    public function edit(Request $request, $id ){
        $request->validate( [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $warta = Jemaat::findOrFail($id);

        $warta->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,

        ]);
        
        // // Flash message untuk sukses
        Session::flash('message', 'Berhasil Update Data');
        return redirect()->route('jemaat');
    }

    public function delete($id)
    {
        // Find the room by ID
        $jemaat = Jemaat::findOrFail($id);
        $jemaat->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('jemaat');
    }
}