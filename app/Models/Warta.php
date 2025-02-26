<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warta extends Model
{
    protected $fillable = [
        'warta',
        'bacaan',
        'nyanyian',
    ];

    function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
}