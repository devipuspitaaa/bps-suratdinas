<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratUndanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_undangan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->date('tgl_surat');
            $table->string('perihal');
            $table->string('kepada');
            $table->string('pukul');
            $table->string('hari_acara');
            $table->date('tgl_acara');
            $table->string('tempat_acara');
            $table->string('acara');
            $table->string('tembusan');
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
        Schema::dropIfExists('surat_undangan');
    }
}
