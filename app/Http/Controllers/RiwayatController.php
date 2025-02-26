<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Jemaat;
use App\Models\Penguruses;
use App\Models\Persembahan;
use App\Models\Warta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class RiwayatController extends Controller
{
    public function index(){

        $firman = Jemaat::all();
        $keyboard = Jemaat::all();
        $lcd = Jemaat::all();
        $wartaadd = warta::all();
        $wartasel = Warta::all();
        $umum = Jemaat::all();
        $perpuluhan = Jemaat::all();
        $istimewa = Jemaat::all();


        $persembahan = Persembahan::with('jemaat')->get();
        $jadwals = Jadwal::with('pembawafirman','keyboardjemaat','lcdjemaat')->where('status','selesai')->get();
        return view('Admin.Riwayat.Riwayat', compact('jadwals','wartasel','perpuluhan','persembahan','istimewa','umum','firman','keyboard','lcd','wartaadd'));
    }

    
    public function update($id){

        $jadwal = Jadwal::FindOrFail($id);
        return view('Admin.Riwayat.edit', compact('jadwal'));
    }

    public function edit(Request $request, $id){
        $request->validate([
            'deskripsi' => 'required',
            'foto.*' => 'image|mimes:jpg,png,jpeg'
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $data = $request->only(['deskripsi']);

        // Hapus gambar yang dipilih
        if ($request->has('delete_images')) {
            $deleteImages = $request->input('delete_images');
            foreach ($deleteImages as $oldImage) {
                $filePath = 'informasi/' . $oldImage;
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath); // Hapus gambar lama
                }
            }
    
            // Update foto setelah penghapusan
            $oldImages = explode(',', $jadwal->foto);
            $remainingImages = array_diff($oldImages, $deleteImages); // Hapus gambar yang dipilih dari array
            $data['foto'] = implode(',', $remainingImages); // Gabungkan nama file yang tersisa menjadi string
        } else {
            // Jika tidak ada gambar yang dihapus, gunakan gambar lama
            $data['foto'] = $jadwal->foto;
        }
    
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
        
        return redirect()->route('riwayat', ['id' => $jadwal->id]);
    }

}