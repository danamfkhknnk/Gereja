<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    public function index(){

        $info = Informasi::where('id', '1')->get();

        return view('Admin.Informasi.Informasi', compact('info'));
    }

    public function tambah(Request $request){
        $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'alamat' => 'required',
            'galeri' => 'required|image|mimes:jpeg,png,jpg',
            'logo' => 'required|image|mimes:jpeg,png,jpg',

        ]);
        
        $info = $request->all();
        if ($files = $request->file('galeri')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('galeri'), $fileName);
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $info['galeri'] = implode(',', $uploadedImages);
        }
        Informasi::create($info);
        Session::flash('message','Tambah Data Berhasil');
        return redirect()->route('informasi');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'alamat' => 'required',
            'galeri.*' => 'image|mimes:jpeg,png,jpg',
            'logo' => 'image|mimes:jpeg,png,jpg',
        ]);
    
        $info = Informasi::findOrFail($id);
        $data = $request->only(['wa', 'sejarah', 'visi', 'misi', 'ig', 'fb', 'alamat']);
    
        // Hapus logo lama jika ada
        if ($files = $request->file('logo')) {
            if ($info->logo) {
                Storage::disk('public')->delete('informasi/' . $info->logo); // Hapus gambar lama
            }
            $fileName = date('YmdHis') . "_" . $files->getClientOriginalName();
            $files->move(public_path('informasi'), $fileName); // Pindahkan file ke direktori yang ditentukan
            $data['logo'] = "$fileName";
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $data['logo'] = $info->logo;
        }
    
        // Hapus gambar yang dipilih
        if ($request->has('delete_images')) {
            $deleteImages = $request->input('delete_images');
            foreach ($deleteImages as $oldImage) {
                $filePath = 'informasi/' . $oldImage;
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath); // Hapus gambar lama
                }
            }
    
            // Update galeri setelah penghapusan
            $oldImages = explode(',', $info->galeri);
            $remainingImages = array_diff($oldImages, $deleteImages); // Hapus gambar yang dipilih dari array
            $data['galeri'] = implode(',', $remainingImages); // Gabungkan nama file yang tersisa menjadi string
        } else {
            // Jika tidak ada gambar yang dihapus, gunakan gambar lama
            $data['galeri'] = $info->galeri;
        }
    
        // Upload gambar baru
        if ($files = $request->file('galeri')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('informasi'), $fileName); // Pindahkan file ke direktori yang ditentukan
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
    
            // Gabungkan gambar baru dengan gambar lama
            $existingImages = $info->galeri ? explode(',', $info->galeri) : [];
            $data['galeri'] = implode(',', array_merge($existingImages, $uploadedImages)); // Gabungkan nama file menjadi string
        }
    
        $info->update($data);
        
        Session::flash('message', 'Update Data Berhasil');
        
        return redirect()->route('informasi', ['id' => $info->id]);
    }
}