<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jadwal Pelajaran Kelas {{ $kelas->nama_kelas }}</title>
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

        .table tbody td {
            text-align: center;
        }

        .table tbody td:nth-child(2) {
            text-align: left;
        }

        .mapel-name {
            margin: 0;
            font-weight: bold;
            color: #1a202c;
        }

        .guru-name {
            margin: 3px 0 0;
            font-size: 12px;
            color: #718096;
            font-style: italic;
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
        JADWAL PELAJARAN KELAS {{ $kelas->nama_kelas }}
    </div>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 15%">Hari</th>
                <th style="width: 40%">Mata Pelajaran</th>
                <th style="width: 25%">Waktu</th>
                <th style="width: 20%">Ruang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $data)
                <tr>
                    <td><strong>{{ $data->hari->nama_hari }}</strong></td>
                    <td>
                        <div class="mapel-name">{{ $data->mapel->nama_mapel }}</div>
                        <div class="guru-name">Pengajar: {{ $data->guru->nama_guru }}</div>
                    </td>
                    <td>{{ date('H:i', strtotime($data->jam_mulai)) }} - {{ date('H:i', strtotime($data->jam_selesai)) }}</td>
                    <td>{{ $data->ruang->nama_ruang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Copyright &copy; {{ date('Y') }} :: MA'HAD FITYANUL ULUM
    </div>
</body>
</html>
