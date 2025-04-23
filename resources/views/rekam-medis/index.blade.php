@extends('main.main')

@section('title', 'Rekam Medis - Daftar Pasien')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pasien</h6>
            <div class="input-group" style="width: 300px;">
                <input type="text" class="form-control" placeholder="Cari pasien...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama Pasien</th>
                            <th>Tempat/Tgl Lahir</th>
                            <th>No Telepon</th>
                            <th>Agama</th>
                            <th>Jenis Kelamin</th>
                            <th>Gol. Darah</th>
                            <th>Layanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pasiens as $pasien)
                        <tr>
                            <td>{{ $pasien->no_rm }}</td>
                            <td>{{ $pasien->nama }}</td>
                            <td>{{ $pasien->tempat_lahir }}, {{ date('d-m-Y', strtotime($pasien->tanggal_lahir)) }}</td>
                            <td>{{ $pasien->no_telepon }}</td>
                            <td>{{ $pasien->agama }}</td>
                            <td>{{ $pasien->jenis_kelamin }}</td>
                            <td>{{ $pasien->golongan_darah }}</td>
                            <td>{{ $pasien->layanan }}</td>
                            <td>
                                <a href="{{ route('rekam-medis.detail', $pasien->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i> Pilih
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $pasiens->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection