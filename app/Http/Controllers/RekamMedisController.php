<?php

// app/Http/Controllers/RekamMedisController.php
namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::orderBy('created_at', 'desc')->paginate(10);
        return view('rekam-medis.index', compact('pasiens'));
    }

    public function detail($id)
    {
        $pasien = Pasien::with('pemeriksaans.dokter')->findOrFail($id);
        return view('rekam-medis.detail', compact('pasien'));
    }

    public function cetakPasien($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('rekam-medis.cetak-pasien', compact('pasien'));
    }

    public function cetakPemeriksaan($id)
    {
        $pemeriksaan = Pemeriksaan::with(['pasien', 'dokter'])->findOrFail($id);
        return view('rekam-medis.cetak-pemeriksaan', compact('pemeriksaan'));
    }
}