<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keuangan extends Model
{
    protected $fillable = [
        'status',
        'jadwal_id',
        'persembahan_id',
        'tanggal',
        'keterangan',
        'jumlah'
    ];

    function persembahan(): BelongsTo
    {
        return $this->belongsTo(Persembahan::class);
    }

    function jadwal(): BelongsTo
    {
        return $this->belongsTo(Jadwal::class);
    }

}