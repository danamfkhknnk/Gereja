<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $fillable = [
        'sejarah',
        'visi',
        'misi',
        'ig',
        'fb',
        'wa',
        'alamat',
        'galeri',
        'logo'
    ];
}