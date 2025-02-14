<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\SesiController::class, 'login'])->name('login');


Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');