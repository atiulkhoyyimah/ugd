@extends('main.main')

@section('title', 'Rekam Medis - Detail Pasien')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column">
        <!-- Data Pasien -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
                    <a href="{{ route('rekam-medis.cetak-pasien', $pasien->id) }}" class="btn btn-sm btn-success">
                        <i class="fas fa-print"></i> Cetak
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>No RM:</strong> {{ $pasien->no_rm }}</p>
                            <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
                            <p><strong>Tempat/Tgl Lahir:</strong> {{ $pasien->tempat_lahir }}, {{ date('d-m-Y', strtotime($pasien->tanggal_lahir)) }}</p>
                            <p><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>No Telepon:</strong> {{ $pasien->no_telepon }}</p>
                            <p><strong>Agama:</strong> {{ $pasien->agama }}</p>
                            <p><strong>Gol. Darah:</strong> {{ $pasien->golongan_darah }}</p>
                            <p><strong>Layanan:</strong> {{ $pasien->layanan }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Riwayat Pemeriksaan -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Pemeriksaan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Dokter</th>
                                    <th>Diagnosa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pasien->pemeriksaans as $pemeriksaan)
                                <tr>
                                    <td>{{ date('d-m-Y', strtotime($pemeriksaan->tanggal_pemeriksaan)) }}</td>
                                    <td>{{ $pemeriksaan->dokter->nama }}</td>
                                    <td>{{ Str::limit($pemeriksaan->diagnosa, 30) }}</td>
                                    <td>
                                        <a href="{{ route('rekam-medis.cetak-pemeriksaan', $pemeriksaan->id) }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-print"></i> Cetak
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection