<?php

namespace App\Exports;

use App\Absen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AbsenExport implements FromCollection, WithHeadings
{
    protected $guru_id;

    public function __construct($guru_id)
    {
        $this->guru_id = $guru_id;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $absen = Absen::where('guru_id', $this->guru_id)
            ->orderBy('tanggal', 'desc')
            ->with('kehadiran')
            ->get();

        $data = $absen->map(function($item) {
            return [
                'tanggal' => date('d-m-Y', strtotime($item->tanggal)),
                'keterangan' => $item->kehadiran->ket ?? '-'
            ];
        });

        return $data;
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Keterangan',
        ];
    }
}
