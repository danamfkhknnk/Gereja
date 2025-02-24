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

    public function jadwalsAsPembawaFirman()
    {
        return $this->hasMany(Jadwal::class, 'pembawa_firman');
    }

    public function jadwalsAsKeyboard()
    {
        return $this->hasMany(Jadwal::class, 'keyboard');
    }

    public function jadwalsAsLcd()
    {
        return $this->hasMany(Jadwal::class, 'lcd');
    }
}