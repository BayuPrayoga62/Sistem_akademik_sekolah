@extends('template_backend.home')
@section('heading', 'Input Absensi Siswa')
@section('page')
    <li class="breadcrumb-item"><a href="{{ route('absen-siswa.kelas') }}">Absensi Siswa</a></li>
    <li class="breadcrumb-item active">Input</li>
@endsection
@section('content')
    <div class="col-md-12">
        @if (!$canInput)
            <div class="alert alert-warning">
                Saat ini bukan jadwal mapel <strong>{{ $jadwal->mapel->nama_mapel }}</strong> untuk kelas
                <strong>{{ $jadwal->kelas->nama_kelas }}</strong>.
                Jadwal seharusnya pada hari <strong>{{ $jadwal->hari->nama_hari }}</strong> jam
                <strong>{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</strong>.
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $jadwal->kelas->nama_kelas }} - {{ $jadwal->mapel->nama_mapel }}</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Tanggal:</strong> {{ date('l, d F Y', strtotime($today)) }}
                </div>
                <form action="{{ route('absen-siswa.simpan') }}" method="post">
                    @csrf
                    <input type="hidden" name="jadwal_id" value="{{ $jadwal->id }}">
                    <input type="hidden" name="tanggal" value="{{ $today }}">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>No. Induk</th>
                                <th>Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_siswa }}</td>
                                    <td>{{ $item->no_induk }}</td>
                                    <td>
                                        <select name="kehadiran_id[{{ $item->id }}]" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            @foreach ($kehadiran as $ket)
                                                <option value="{{ $ket->id }}"
                                                    @if (isset($absensiHari[$item->id]) && $absensiHari[$item->id] == $ket->id) selected @endif>
                                                    {{ $ket->ket }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success"><i
                            class="nav-icon fas fa-save"></i> Simpan Absensi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#AbsenSiswa").addClass("active");
    </script>
@endsection
