<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $fillable = [
        'name',
        'no_hp',
        'keahlian',
        'deskripsi',
        'path_foto',
    ];
}
