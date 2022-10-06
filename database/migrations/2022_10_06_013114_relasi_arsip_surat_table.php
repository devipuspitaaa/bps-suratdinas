<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiArsipSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arsip_surat', function (Blueprint $table){
            $table->unsignedBigInteger('no_surat')->nullable();
            $table->foreign('no_surat')->references('id')->on('surat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arsip_surat', function (Blueprint $table) {
            $table->string('nomor_surat');
            $table->dropForeign(['no_surat']);
        });
    }
}
