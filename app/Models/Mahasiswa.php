<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = ['npm', 'nama', 'prodi_id','foto' ];
    //relasi mahasiswa ke prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
