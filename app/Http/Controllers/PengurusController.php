<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use App\Models\Penguruses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengurusController extends Controller
{
    public function index(){
        $jemaat = Jemaat::all();
        $edit = Penguruses::with('jemaat')->get();
        $penguruses = Penguruses::all();
        return view('Admin.Pengurus.Pengurus', compact('penguruses','jemaat','edit'));
    }
    public function add(Request $request ){
        $request->validate( [
            'jemaat_id' => 'required|unique:penguruses,jemaat_id|exists:jemaats,id',
            'posisi' => 'required|unique:penguruses,posisi',
        ]);

        Penguruses::create($request->all());
        
        // // Flash message untuk sukses
        Session::flash('message', 'Berhasil Tambah Data');
        return redirect()->route('pengurus');
    }

    public function delete($id)
    {
        // Find the room by ID
        $penguruses = Penguruses::findOrFail($id);
        $penguruses->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('pengurus');
    }
    
}