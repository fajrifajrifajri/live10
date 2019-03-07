<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJanjiPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('janji_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode-janji');
            $table->string('kode-antrian');
            $table->string('notelp');
            $table->string('email');
            $table->string('nama_pasien');
            $table->string('kelamin');
            $table->string('gol_darah');
            $table->string('pekerjaan');
            $table->date('tgllahir_pasien');
            $table->string('nama_dokter');
            $table->date('tgl_bertemu');
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
        Schema::dropIfExists('janji_pasien');
    }
}
