<?php

namespace App\Exports;

use App\AbsenSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AbsensiSiswaExport implements FromCollection, WithHeadings, WithMapping
{
    protected $kelas_id;
    protected $tanggal;

    public function __construct($kelas_id, $tanggal = null)
    {
        $this->kelas_id = $kelas_id;
        $this->tanggal = $tanggal;
    }

    public function collection()
    {
        $query = AbsenSiswa::whereHas('jadwal', function ($q) {
            $q->where('kelas_id', $this->kelas_id);
        })->with(['siswa', 'jadwal.mapel', 'kehadiran']);

        if ($this->tanggal) {
            $query->where('tanggal', $this->tanggal);
        }

        return $query->orderBy('tanggal', 'desc')->get();
    }

    public function map($absensi): array
    {
        return [
            date('d-m-Y', strtotime($absensi->tanggal)),
            $absensi->jadwal->mapel->nama_mapel,
            $absensi->siswa->nama_siswa,
            $absensi->kehadiran->ket,
        ];
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Mapel',
            'Nama Siswa',
            'Keterangan',
        ];
    }
}
