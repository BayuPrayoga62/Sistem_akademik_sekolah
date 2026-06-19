<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $siswa = Siswa::join('kelas', 'kelas.id', '=', 'siswa.kelas_id')
            ->select('siswa.nama_siswa', 'siswa.no_induk', 'siswa.jk', 'kelas.nama_kelas')
            ->get();
        return $siswa;
    }

    public function headings(): array
    {
        return [
            'Nama Siswa',
            'No Induk',
            'Jenis Kelamin',
            'Kelas',
        ];
    }
}
