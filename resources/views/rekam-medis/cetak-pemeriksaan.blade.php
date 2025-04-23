<!DOCTYPE html>
<html>
<head>
    <title>Cetak Riwayat Pemeriksaan - {{ $pemeriksaan->pasien->no_rm }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h2 { margin: 0; }
        .info-pasien, .info-pemeriksaan { margin-bottom: 20px; }
        .info-pasien table, .info-pemeriksaan table { width: 100%; border-collapse: collapse; }
        .info-pasien table td, .info-pemeriksaan table td { padding: 5px; border: 1px solid #ddd; }
        .info-pasien table td:first-child, .info-pemeriksaan table td:first-child { width: 30%; font-weight: bold; }
        .footer { margin-top: 50px; text-align: right; }
        @page { size: A4; margin: 20mm; }
    </style>
</head>
<body>
    <div class="header">
        <h2>RIWAYAT PEMERIKSAAN PASIEN</h2>
        <h3>Rumah Sakit Contoh</h3>
    </div>

    <div class="info-pasien">
        <table>
            <tr>
                <td>No Rekam Medis</td>
                <td>{{ $pemeriksaan->pasien->no_rm }}</td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>{{ $pemeriksaan->pasien->nama }}</td>
            </tr>
        </table>
    </div>

    <div class="info-pemeriksaan">
        <table>
            <tr>
                <td>Tanggal Pemeriksaan</td>
                <td>{{ date('d-m-Y', strtotime($pemeriksaan->tanggal_pemeriksaan)) }}</td>
            </tr>
            <tr>
                <td>Dokter</td>
                <td>{{ $pemeriksaan->dokter->nama }}</td>
            </tr>
            <tr>
                <td>Diagnosa</td>
                <td>{{ $pemeriksaan->diagnosa }}</td>
            </tr>
            <tr>
                <td>Tindakan</td>
                <td>{{ $pemeriksaan->tindakan }}</td>
            </tr>
            <tr>
                <td>Resep Obat</td>
                <td>{{ $pemeriksaan->resep_obat }}</td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>{{ $pemeriksaan->catatan }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        <p>Jakarta, {{ date('d F Y') }}</p>
        <br><br><br>
        <p>(_______________________)</p>
    </div>
</body>
</html>