<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Pasien - {{ $pasien->no_rm }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h2 { margin: 0; }
        .info-pasien { margin-bottom: 20px; }
        .info-pasien table { width: 100%; border-collapse: collapse; }
        .info-pasien table td { padding: 5px; border: 1px solid #ddd; }
        .info-pasien table td:first-child { width: 30%; font-weight: bold; }
        .footer { margin-top: 50px; text-align: right; }
        @page { size: A4; margin: 20mm; }
    </style>
</head>
<body>
    <div class="header">
        <h2>DATA PASIEN</h2>
        <h3>Rumah Sakit Contoh</h3>
    </div>

    <div class="info-pasien">
        <table>
            <tr>
                <td>No Rekam Medis</td>
                <td>{{ $pasien->no_rm }}</td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>{{ $pasien->nama }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>{{ $pasien->tempat_lahir }}, {{ date('d-m-Y', strtotime($pasien->tanggal_lahir)) }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{ $pasien->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>{{ $pasien->no_telepon }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>{{ $pasien->agama }}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>{{ $pasien->golongan_darah }}</td>
            </tr>
            <tr>
                <td>Layanan</td>
                <td>{{ $pasien->layanan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{ $pasien->alamat }}</td>
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