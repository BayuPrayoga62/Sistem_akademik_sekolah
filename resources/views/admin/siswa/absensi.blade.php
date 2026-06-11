@extends('template_backend.home')
@section('heading', 'Absensi Siswa')
@section('page')
    <li class="breadcrumb-item active">Absensi Siswa</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar kelas yang memiliki data absensi siswa</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_kelas }}</td>
                                <td>
                                    <a href="{{ route('siswa.absensi.detail', $item->id) }}"
                                        class="btn btn-info btn-sm">Detail</a>
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
        $("#AbsensiSiswaAdmin").addClass("active");
    </script>
@endsection
