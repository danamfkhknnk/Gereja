<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nama',
        'deskripsi',
        'jenis',
        'waktu',
        'warta_id',
        'pembawa_firman',
        'keyboard',
        'lcd',
        'foto',
    ];

    // function warta(){
    //     return $this->hasMany(Warta::class, 'warta_id');
    // }

    function warta(): BelongsTo
    {
        return $this->belongsTo(Warta::class);
    }


    // Relasi dengan model Jemaat sebagai Pembawa Firman
    public function pembawaFirman()
    {
        return $this->belongsTo(Jemaat::class, 'pembawa_firman');
    }

    // Relasi dengan model Jemaat sebagai Keyboard
    public function keyboardJemaat()
    {
        return $this->belongsTo(Jemaat::class, 'keyboard');
    }

    // Relasi dengan model Jemaat sebagai LCD
    public function lcdJemaat()
    {
        return $this->belongsTo(Jemaat::class, 'lcd');
    }
}