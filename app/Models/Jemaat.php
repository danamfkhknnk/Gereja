<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    protected $fillable = [
        'nama',
        'alamat'
    ];

    function penguruses(){
        return $this->hasMany(Penguruses::class);
    }
}