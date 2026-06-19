<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Siswa Kelas {{ $kelas->nama_kelas }}</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            font-size: 14px;
        }

        .header {
            text-align: center;
            border-bottom: 3px double #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .header h1 {
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 14px;
        }

        .title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            text-decoration: underline;
            text-transform: uppercase;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #333;
            padding: 8px 10px;
            vertical-align: middle;
        }

        .table thead th {
            background-color: #e2e8f0;
            color: #333;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 13px;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .table tbody td.text-center {
            text-align: center;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #a0aec0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>MA'HAD FITYANUL ULUM</h1>
        <p>Sistem Akademik Sekolah</p>
    </div>

    <div class="title">
        DAFTAR SISWA KELAS {{ $kelas->nama_kelas }}
    </div>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 25%">No. Induk</th>
                <th style="width: 50%">Nama Siswa</th>
                <th style="width: 20%">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $data)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $data->no_induk }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td class="text-center">{{ $data->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Copyright &copy; {{ date('Y') }} :: MA'HAD FITYANUL ULUM
    </div>
</body>
</html>
