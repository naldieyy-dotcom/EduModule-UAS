<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $fillable = [

        'gambar',

        'judul_modul',

        'mata_kuliah',

        'jenjang',

        'file_modul',

        'tahun_terbit'

    ];
}