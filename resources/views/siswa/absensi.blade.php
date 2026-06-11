@extends('template_backend.home')
@section('heading', 'Absensi Saya')
@section('page')
    <li class="breadcrumb-item active">Absensi</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $stats->get('Hadir', 0) }}</h3>
                        <p>Hadir</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $stats->get('Izin', 0) }}</h3>
                        <p>Izin</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $stats->get('Sakit', 0) }}</h3>
                        <p>Sakit</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-notes-medical"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $stats->get('Tanpa Keterangan', 0) + $stats->get('Terlambat', 0) + $stats->get('Bertugas Keluar', 0) }}
                        </h3>
                        <p>Tanpa Keterangan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat absensi saya</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kelas</th>
                            <th>Mapel</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($absensi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                <td>{{ $item->jadwal->kelas->nama_kelas }}</td>
                                <td>{{ $item->jadwal->mapel->nama_mapel }}</td>
                                <td>{{ $item->kehadiran->ket }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data absensi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#AbsensiSiswa").addClass("active");
    </script>
@endsection
