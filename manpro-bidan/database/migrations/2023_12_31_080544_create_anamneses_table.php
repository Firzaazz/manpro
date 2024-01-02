<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnesis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('keluhan_utama');
            $table->string('riwayat_penyakit_dahulu');
            $table->string('riwayat_alergi');
            $table->string('riwayat_kehamilan');
            $table->string('riwayat_kelahiran')->nullable();
            $table->timestamps();
            $table->kunjungan_terakhir('ttl');
            // Kolom id_pasien
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')->references('id')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anamneses');
    }
}
