<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien', 100);
            $table->date('ttl');
            $table->string('nama_penanggung', 100);
            $table->string('pembayaran_status', 100);
            $table->string('alamat', 100);
            $table->string('no_telp', 100);
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
        Schema::dropIfExists('datapasiens');
    }
}
