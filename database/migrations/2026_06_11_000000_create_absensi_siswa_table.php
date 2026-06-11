<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->unsignedBigInteger('kehadiran_id');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('jadwal_id')->references('id')->on('jadwal')->onDelete('cascade');
            $table->foreign('kehadiran_id')->references('id')->on('kehadiran')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_siswa');
    }
}
