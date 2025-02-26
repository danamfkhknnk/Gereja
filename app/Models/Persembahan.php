<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persembahan extends Model
{
    protected $fillable = [
        'jadwal_id',
        'jemaat_id',
        'tipe',
        'jumlah',
    ];

    function jemaat(): BelongsTo
    {
        return $this->belongsTo(Jemaat::class);
    }

    function jadwal(): BelongsTo
    {
        return $this->belongsTo(Jadwal::class);
    }
}