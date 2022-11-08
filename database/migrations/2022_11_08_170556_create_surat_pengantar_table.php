<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPengantarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_pengantar', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->date('tgl_surat');
            $table->string('tujuan_surat');
            $table->string('kota_tujuansurat');
            $table->string('dokumen_ygdikirim');
            $table->string('banyaknya');
            $table->string('keterangan');
            $table->string('penerima');
            $table->string('nip_penerima');
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
        Schema::dropIfExists('surat_pengantar');
    }
}
