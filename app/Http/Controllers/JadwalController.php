<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Jadwal;
use App\Models\Jemaat;
use App\Models\Warta;
use Carbon\Carbon;
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
        $wartasel = warta::all();
        $info = Informasi::first();
        $jadwals = Jadwal::with('pembawafirman','keyboardjemaat','lcdjemaat')->where('status','pending')->get();
        return view('Admin.Jadwal.Jadwal', compact('jadwals','info','wartasel','firman','keyboard','lcd','wartaadd'));
    }

    public function update($id){
        $firman = Jemaat::all();
        $keyboard = Jemaat::all();
        $lcd = Jemaat::all();
        $wartaadd = warta::all();
        $wartasel = warta::all();

        $jadwal = Jadwal::FindOrFail($id);
        $jadwal->waktu = Carbon::parse($jadwal->waktu);
        return view('Admin.Jadwal.edit', compact('jadwal','wartasel','firman','keyboard','lcd','wartaadd'));
    }


    public function add( Request $request){

        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jenis' => 'required|in:ibadah,acara', // Pastikan hanya 'ibadah' atau 'kegiatan'
            'waktu' => 'required|date|after_or_equal:now', // Waktu tidak boleh lebih dari waktu sekarang
            'warta_id.*' => 'required|string', // Pastikan warta_id ada di tabel wartas
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
        if (isset($jadwal['warta_id']) && is_array($jadwal['warta_id'])) {
            $jadwal['warta_id'] = implode(',', $jadwal['warta_id']); // Menggabungkan array menjadi string
        }
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
            'jenis' => 'required|in:ibadah,acara', // Pastikan hanya 'ibadah' atau 'kegiatan'
            'waktu' => 'required|date|after_or_equal:now', // Waktu tidak boleh lebih dari waktu sekarang
            'warta_id.*' => 'required|string', // Pastikan warta_id ada di tabel wartas
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

        if (isset($data['warta_id']) && is_array($data['warta_id'])) {
            $data['warta_id'] = implode(',', $data['warta_id']); // Menggabungkan array menjadi string
        }
        // Upload gambar baru
        // Hapus foto lama jika ada

        if ($files = $request->file('foto')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('foto'), $fileName);
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $jadwal['foto'] = implode(',', $uploadedImages);
        }
        

        $jadwal->update($data);

        Session::flash('message', 'Update Data Berhasil');
        return redirect()->route('jadwal', ['id' => $jadwal->id]);
    }

    public function selesai($id){
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->status = 'selesai';
        $jadwal->save();
        Session::flash('message', 'Update Data Berhasil');
        return redirect()->route('jadwal', ['id' => $jadwal->id]);
    }

    public function delete($id)
    {
        // Find the room by ID
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->persembahan()->delete();
        $jadwal->delete();
        Session::flash('message', 'Berhasil Hapus Data');
        return redirect()->route('jadwal');
    }
}