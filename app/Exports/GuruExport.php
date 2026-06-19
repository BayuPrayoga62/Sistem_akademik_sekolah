<?php

namespace App\Exports;

use App\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuruExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $guru = Guru::join('mapel', 'mapel.id', '=', 'guru.mapel_id')
            ->select('guru.nama_guru', 'guru.nip', 'guru.jk', 'mapel.nama_mapel')
            ->get();

        return $guru;
    }

    public function headings(): array
    {
        return [
            'Nama Guru',
            'NIP',
            'Jenis Kelamin',
            'Mata Pelajaran',
        ];
    }
}
