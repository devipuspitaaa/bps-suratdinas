<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->string('nama_pegawai');
            $table->string('nip_pegawai');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('golongan_perjadin');
            $table->string('tujuan_surattugas');
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->string('durasi_tugas');
            $table->date('tgl_surat');
            $table->string('transportasi');
            $table->string('tempat_tujuan');
            $table->string('mata_anggaran');
            $table->date('tgl_keluarSPD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_tugas');
    }
}
