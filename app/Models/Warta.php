<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warta extends Model
{
    protected $fillable = [
        'warta',
        'bacaan',
        'nyanyian',
    ];
}