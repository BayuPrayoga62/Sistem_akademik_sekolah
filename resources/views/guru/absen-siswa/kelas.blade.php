@extends('template_backend.home')
@section('heading', 'Daftar Absensi Siswa')
@section('page')
    <li class="breadcrumb-item active">Absensi Siswa</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar jadwal kelas yang dapat diisi absensi</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Mapel</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->kelas->nama_kelas }}</td>
                                <td>{{ $data->mapel->nama_mapel }}</td>
                                <td>{{ $data->hari->nama_hari }}</td>
                                <td>{{ $data->jam_mulai }} - {{ $data->jam_selesai }}</td>
                                <td>
                                    <a href="{{ route('absen-siswa.input', $data->id) }}" class="btn btn-primary btn-sm">Input
                                        Absensi</a>
                                    <a href="{{ route('absen-siswa.riwayat', $data->id) }}"
                                        class="btn btn-info btn-sm">Riwayat</a>
                                </td>
                            </tr>
                        @endforeach
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
