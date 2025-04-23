<?php

// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pemeriksaan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed Dokter
        $dokters = [
            ['kode_dokter' => 'D001', 'nama' => 'Dr. Ahmad', 'spesialisasi' => 'Umum', 'no_telepon' => '08123456789'],
            ['kode_dokter' => 'D002', 'nama' => 'Dr. Budi', 'spesialisasi' => 'KIA', 'no_telepon' => '08234567890'],
            ['kode_dokter' => 'D003', 'nama' => 'Dr. Citra', 'spesialisasi' => 'UGD', 'no_telepon' => '08345678901'],
        ];
        
        foreach ($dokters as $dokter) {
            Dokter::create($dokter);
        }

        // Seed Pasien
        $pasiens = [
            [
                'no_rm' => 'RM001',
                'nama' => 'Pasien 1',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-01-01',
                'no_telepon' => '08111111111',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Laki-laki',
                'golongan_darah' => 'A',
                'layanan' => 'Poli Umum',
                'alamat' => 'Jl. Contoh No. 1'
            ],
            // Tambahkan data pasien lainnya...
        ];
        
        foreach ($pasiens as $pasien) {
            Pasien::create($pasien);
        }

        // Seed Pemeriksaan
        $pemeriksaans = [
            [
                'pasien_id' => 1,
                'dokter_id' => 1,
                'tanggal_pemeriksaan' => now()->subDays(10),
                'diagnosa' => 'Demam',
                'tindakan' => 'Pemberian obat penurun panas',
                'resep_obat' => 'Paracetamol 500mg 3x1',
                'catatan' => 'Istirahat yang cukup'
            ],
            // Tambahkan data pemeriksaan lainnya...
        ];
        
        foreach ($pemeriksaans as $pemeriksaan) {
            Pemeriksaan::create($pemeriksaan);
        }
    }
}