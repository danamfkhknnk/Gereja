<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penguruses extends Model
{
    protected $fillable = [
        'jemaat_id',
        'posisi'
    ];

    function jemaat(): BelongsTo
    {
        return $this->belongsTo(Jemaat::class);
    }
}