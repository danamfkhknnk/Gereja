<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\SesiController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\SesiController::class, 'aksilogin'])->name('aksilogin');
Route::get('/logout', [App\Http\Controllers\SesiController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::get('/admin/jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->name('jadwal');
Route::post('/admin/jadwal/tambah', [App\Http\Controllers\JadwalController::class, 'add']);
Route::get('/admin/jadwal/{id}/delete', [App\Http\Controllers\JadwalController::class, 'delete']);
Route::post('/admin/jadwal/{id}/edit', [App\Http\Controllers\JadwalController::class, 'edit']);
Route::get('/admin/jadwal/{id}/edit', [App\Http\Controllers\JadwalController::class, 'update']);
Route::post('/admin/jadwal/{id}/selesai', [App\Http\Controllers\JadwalController::class, 'selesai']);


Route::get('/admin/riwayat/', [App\Http\Controllers\RiwayatController::class, 'index'])->name('riwayat');
Route::get('/admin/riwayat/{id}/edit', [App\Http\Controllers\RiwayatController::class, 'update']);
Route::post('/admin/riwayat/{id}/edit', [App\Http\Controllers\RiwayatController::class, 'edit']);


Route::post('/admin/persembahan/tambah', [App\Http\Controllers\PersembahanController::class, 'add']);
Route::get('/admin/persembahan/{id}/delete', [App\Http\Controllers\PersembahanController::class, 'delete']);

Route::get('/admin/informasi', [App\Http\Controllers\InformasiController::class, 'index'])->name('informasi');
Route::put('/admin/informasi/{id}/edit', [App\Http\Controllers\InformasiController::class, 'edit'])->name('editInformasi');

Route::get('/admin/jemaat', [App\Http\Controllers\JemaatController::class, 'index'])->name('jemaat');
Route::post('/admin/jemaat/tambah', [App\Http\Controllers\JemaatController::class, 'add'])->name('addJemaat');
Route::post('/admin/jemaat/{id}/edit', [App\Http\Controllers\JemaatController::class, 'edit'])->name('editJemaat');
Route::get('/admin/jemaat/{id}/delete', [App\Http\Controllers\JemaatController::class, 'delete'])->name('deleteJemaat');

Route::get('/admin/keuangan', [App\Http\Controllers\KeuanganController::class, 'index'])->name('keuangan');

Route::get('/admin/pengurus', [App\Http\Controllers\PengurusController::class, 'index'])->name('pengurus');
Route::post('/admin/pengurus/tambah', [App\Http\Controllers\PengurusController::class, 'add'])->name('addPengurus');
Route::post('/admin/pengurus/{id}/edit', [App\Http\Controllers\PengurusController::class, 'edit'])->name('editPengurus');
Route::get('/admin/pengurus/{id}/edit', [App\Http\Controllers\PengurusController::class, 'update']);
Route::get('/admin/pengurus/{id}/delete', [App\Http\Controllers\PengurusController::class, 'delete'])->name('deletePengurus');

Route::get('/admin/warta', [App\Http\Controllers\WartaController::class, 'index'])->name('warta');
Route::post('/admin/warta/tambah', [App\Http\Controllers\WartaController::class, 'add'])->name('addwarta');
Route::post('/admin/warta/{id}/edit', [App\Http\Controllers\WartaController::class, 'edit'])->name('editWarta');
Route::get('/admin/warta/{id}/delete', [App\Http\Controllers\WartaController::class, 'delete'])->name('deleteWarta');


Route::get('/admin/pengguna', [App\Http\Controllers\SesiController::class, 'index'])->name('pengguna');
Route::post('/admin/pengguna/tambah', [App\Http\Controllers\SesiController::class, 'register'])->name('register');
Route::post('/admin/pengguna/{id}/edit', [App\Http\Controllers\SesiController::class, 'edit'])->name('editPengguna');
Route::get('/admin/pengguna/{id}/delete', [App\Http\Controllers\SesiController::class, 'delete'])->name('deletePengguna');
});