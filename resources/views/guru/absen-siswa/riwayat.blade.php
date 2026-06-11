@extends('template_backend.home')
@section('heading', 'Riwayat Absensi Siswa')
@section('page')
    <li class="breadcrumb-item"><a href="{{ route('absen-siswa.kelas') }}">Absensi Siswa</a></li>
    <li class="breadcrumb-item active">Riwayat</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat absensi untuk {{ $jadwal->kelas->nama_kelas }} -
                    {{ $jadwal->mapel->nama_mapel }}</h3>
            </div>
            <div class="card-body">
                <form method="get" class="form-inline mb-3">
                    <div class="form-group mr-2">
                        <label for="tanggal" class="mr-2">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control"
                            value="{{ request('tanggal') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Siswa</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($absensi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                <td>{{ $item->siswa->nama_siswa }}</td>
                                <td>{{ $item->kehadiran->ket }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data absensi.</td>
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
        $("#AbsenSiswa").addClass("active");
    </script>
@endsection
