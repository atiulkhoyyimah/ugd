<?php

// app/Models/Dokter.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = ['kode_dokter', 'nama', 'spesialisasi', 'no_telepon'];

    public function pemeriksaans()
    {
        return $this->hasMany(Pemeriksaan::class);
    }
}
