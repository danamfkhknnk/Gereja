<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Jemaat;
use App\Models\Warta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    public function index(){

        $firman = Jemaat::all();
        $keyboard = Jemaat::all();
        $lcd = Jemaat::all();
        $wartaadd = warta::all();

        $jadwals = Jadwal::with('pembawafirman','keyboardjemaat','lcdjemaat','warta')->get();
        return view('Admin.Jadwal.Jadwal', compact('jadwals','firman','keyboard','lcd','wartaadd'));
    }

    public function update($id){
        $firman = Jemaat::all();
        $keyboard = Jemaat::all();
        $lcd = Jemaat::all();
        $wartaadd = warta::all();

        $jadwal = Jadwal::FindOrFail($id);
        return view('Admin.Jadwal.edit', compact('jadwal','firman','keyboard','lcd','wartaadd'));
    }


    public function add( Request $request){

        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jenis' => 'required|in:ibadah,kegiatan', // Pastikan hanya 'ibadah' atau 'kegiatan'
            'waktu' => 'required|date|after_or_equal:now', // Waktu tidak boleh lebih dari waktu sekarang
            'warta_id' => 'required|exists:wartas,id', // Pastikan warta_id ada di tabel wartas
            'foto.*' => 'image|mimes:jpeg,png,jpg',
            'pembawa_firman' => [
                'required',
                'exists:jemaats,id',
                'different:keyboard,lcd' // Pembawa firman tidak boleh sama dengan keyboard dan lcd
            ],
            'keyboard' => [
                'required',
                'exists:jemaats,id',
                'different:pembawa_firman,lcd' // Keyboard tidak boleh sama dengan pembawa firman dan lcd
            ],
            'lcd' => [
                'required',
                'exists:jemaats,id',
                'different:pembawa_firman,keyboard' // LCD tidak boleh sama dengan pembawa firman dan keyboard
            ],
        ]);
        
        $jadwal = $request->all();
        if ($files = $request->file('foto')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('foto'), $fileName);
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $jadwal['foto'] = implode(',', $uploadedImages);
        }
        
        Jadwal::create($jadwal);
        Session::flash('message', 'Berhasil Tambah Data');
        return redirect()->route('jadwal');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jenis' => 'required|in:ibadah,kegiatan', // Pastikan hanya 'ibadah' atau 'kegiatan'
            'waktu' => 'required|date|after_or_equal:now', // Waktu tidak boleh lebih dari waktu sekarang
            'warta_id' => 'required|exists:wartas,id', // Pastikan warta_id ada di tabel wartas
            'foto.*' => 'image|mimes:jpeg,png,jpg',
            'pembawa_firman' => [
                'required',
                'exists:jemaats,id',
                'different:keyboard,lcd' // Pembawa firman tidak boleh sama dengan keyboard dan lcd
            ],
            'keyboard' => [
                'required',
                'exists:jemaats,id',
                'different:pembawa_firman,lcd' // Keyboard tidak boleh sama dengan pembawa firman dan lcd
            ],
            'lcd' => [
                'required',
                'exists:jemaats,id',
                'different:pembawa_firman,keyboard' // LCD tidak boleh sama dengan pembawa firman dan keyboard
            ],
        ]);
    
        $jadwal = Jadwal::findOrFail($id);
        $data = $request->only(['nama', 'deskripsi', 'jenis', 'waktu', 'warta_id', 'pembawa_firman','keyboard','lcd']);
    
        // Upload gambar baru
        if ($files = $request->file('foto')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('foto'), $fileName); // Pindahkan file ke direktori yang ditentukan
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
    
            // Gabungkan gambar baru dengan gambar lama
            $existingImages = $jadwal->foto ? explode(',', $jadwal->foto) : [];
            $data['foto'] = implode(',', array_merge($existingImages, $uploadedImages)); // Gabungkan nama file menjadi string
        }
        $jadwal->update($data);

        Session::flash('message', 'Update Data Berhasil');
        
        return redirect()->route('jadwal', ['id' => $jadwal->id]);
    }

    public function delete($id)
    {
        // Find the room by ID
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('jadwal');
    }
}