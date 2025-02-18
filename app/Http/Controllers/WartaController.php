<?php

namespace App\Http\Controllers;

use App\Models\Warta;
use Illuminate\Console\View\Components\Warn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WartaController extends Controller
{
    public function index(){
        $warta = Warta::all();
        return view('Admin.Warta.Warta', compact('warta'));
    }

    public function add(Request $request ){
        $request->validate( [
            'warta' => 'required',
            'bacaan' => 'required',
            'nyanyian' => 'required',
        ]);

        Warta::create($request->all());
        
        // // Flash message untuk sukses
        Session::flash('message', 'Berhasil Tambah Data');
        return redirect()->route('warta');
    }
    public function edit(Request $request, $id ){
        $request->validate( [
            'warta' => 'required',
            'bacaan' => 'required',
            'nyanyian' => 'required',
        ]);

        $warta = Warta::findOrFail($id);

        $warta->update([
            'warta' => $request->warta,
            'bacaan' => $request->bacaan,
            'nyanyian' => $request->nyanyian,

        ]);
        
        // // Flash message untuk sukses
        Session::flash('message', 'Berhasil Update Data');
        return redirect()->route('warta');
    }

    public function delete($id)
    {
        // Find the room by ID
        $warta = Warta::findOrFail($id);
        $warta->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('warta');
    }
}