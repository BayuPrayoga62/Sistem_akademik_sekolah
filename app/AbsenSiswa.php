<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenSiswa extends Model
{
    protected $table = 'absensi_siswa';
    protected $fillable = ['tanggal', 'siswa_id', 'jadwal_id', 'kehadiran_id'];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function jadwal()
    {
        return $this->belongsTo('App\Jadwal');
    }

    public function kehadiran()
    {
        return $this->belongsTo('App\Kehadiran');
    }
}
