<?php

// app/Models/Pasien.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm', 'nama', 'tempat_lahir', 'tanggal_lahir', 
        'no_telepon', 'agama', 'jenis_kelamin', 'golongan_darah',
        'layanan', 'alamat'
    ];

    public function pemeriksaans()
    {
        return $this->hasMany(Pemeriksaan::class);
    }
}
