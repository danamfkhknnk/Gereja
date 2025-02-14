<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\SesiController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\SesiController::class, 'aksilogin'])->name('aksilogin');
Route::get('/logout', [App\Http\Controllers\SesiController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->name('jadwal');
Route::get('/admin/informasi', [App\Http\Controllers\InformasiController::class, 'index'])->name('informasi');
Route::get('/admin/jemaah', [App\Http\Controllers\JemaahController::class, 'index'])->name('jemaah');
Route::get('/admin/kegiatan', [App\Http\Controllers\KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/admin/keuangan', [App\Http\Controllers\KeuanganController::class, 'index'])->name('keuangan');
Route::get('/admin/pengurus', [App\Http\Controllers\PengurusController::class, 'index'])->name('pengurus');
Route::get('/admin/warta', [App\Http\Controllers\WartaController::class, 'index'])->name('warta');
Route::get('/admin/pengguna', [App\Http\Controllers\SesiController::class, 'index'])->name('pengguna');
});