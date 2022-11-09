<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiTemplatePengantarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template', function (Blueprint $table) {
            $table->unsignedBigInteger('pengantar_id')->nullable();
            $table->foreign('pengantar_id')->references('id')->on('surat_pengantar');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template', function (Blueprint $table) {
            $table->string('pengantar_id');
            $table->dropForeign(['pengantar_id']);
        });
    }
}
