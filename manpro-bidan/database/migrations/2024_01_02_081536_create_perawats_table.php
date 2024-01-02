<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawats', function (Blueprint $table) {
            // Informasi Umum
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->string('golongan_darah')->nullable();
            $table->float('berat_badan')->nullable();
            $table->float('tinggi_badan')->nullable();

            // Riwayat Kesehatan
            $table->text('riwayat_penyakit_kronis')->nullable();
            $table->text('riwayat_penyakit_akut')->nullable();
            $table->text('histori_operasi')->nullable();
            $table->text('penggunaan_obat')->nullable();

            // Pemeriksaan Fisik
            $table->text('pemeriksaan_kepala_leher')->nullable();
            $table->text('pemeriksaan_dada')->nullable();
            $table->text('pemeriksaan_kardiovaskular')->nullable();
            $table->text('pemeriksaan_abdomen')->nullable();
            $table->text('pemeriksaan_kulit')->nullable();

            // Status Psikososial
            $table->text('evaluasi_emosional')->nullable();
            $table->text('analisis_dukungan_sosial')->nullable();
            $table->text('faktor_stres')->nullable();

            // Status Nutrisi
            $table->text('evaluasi_asupan_makanan')->nullable();
            $table->text('pengukuran_antropometri')->nullable();
            $table->text('kebutuhan_nutrisi_khusus')->nullable();

            // Pengkajian Resiko dan Keselamatan
            $table->text('risiko_jatuh')->nullable();
            $table->text('evaluasi_lingkungan')->nullable();
            $table->text('alat_bantu')->nullable();

            // Pengkajian Nyeri
            $table->integer('skala_nyeri')->nullable();
            $table->text('identifikasi_lokasi_nyeri')->nullable();
            $table->text('respons_terhadap_pengobatan_nyeri')->nullable();

            // Pengkajian Kognitif
            $table->text('penilaian_kesadaran_orientasi')->nullable();
            $table->text('identifikasi_perubahan_perilaku')->nullable();
            $table->text('evaluasi_kemampuan_keputusan')->nullable();

            // Pengkajian Spiritual
            $table->text('identifikasi_kepercayaan_spiritual')->nullable();
            $table->text('dukungan_spiritual')->nullable();

            // Data Laboratorium dan Diagnostik
            $table->text('analisis_laboratorium')->nullable();
            $table->text('interpretasi_radiologi')->nullable();

            // Pengkajian Perubahan
            $table->text('evaluasi_perubahan_gejala')->nullable();
            $table->text('tinjau_riwayat_perkembangan')->nullable();

            // Kolaborasi dengan Tim Kesehatan Lain
            $table->text('diskusi_dokter_spesialis')->nullable();
            $table->text('kolaborasi_ahli_gizi')->nullable();

            // Catatan dan Dokumentasi
            $table->text('catatan_tindakan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perawats');
    }
}
