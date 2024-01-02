<?php

// File: app\Models\AsessmentKeperawatan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perawat extends Model
{
    protected $primaryKey ="pasien_id";
    protected $table = 'perawats'; // Gantilah dengan nama tabel yang sesuai
    protected $fillable = [
        'pasien_id',
        'golongan_darah',
        'berat_badan',
        'tinggi_badan',
        'riwayat_penyakit_kronis',
        'riwayat_penyakit_akut',
        'histori_operasi',
        'penggunaan_obat',
        'pemeriksaan_kepala_leher',
        'pemeriksaan_dada',
        'pemeriksaan_kardiovaskular',
        'pemeriksaan_abdomen',
        'pemeriksaan_kulit',
        'evaluasi_emosional',
        'analisis_dukungan_sosial',
        'faktor_stres',
        'evaluasi_asupan_makanan',
        'pengukuran_antropometri',
        'kebutuhan_nutrisi_khusus',
        'risiko_jatuh',
        'evaluasi_lingkungan',
        'alat_bantu',
        'skala_nyeri',
        'identifikasi_lokasi_nyeri',
        'respons_terhadap_pengobatan_nyeri',
        'penilaian_kesadaran_orientasi',
        'identifikasi_perubahan_perilaku',
        'evaluasi_kemampuan_keputusan',
        'identifikasi_kepercayaan_spiritual',
        'dukungan_spiritual',
        'analisis_laboratorium',
        'interpretasi_radiologi',
        'evaluasi_perubahan_gejala',
        'tinjau_riwayat_perkembangan',
        'diskusi_dokter_spesialis',
        'kolaborasi_ahli_gizi',
        'catatan_tindakan',
    ];

    // Definisikan relasi jika diperlukan
    // public function pasien()
    // {
    //     return $this->belongsTo(Pasien::class, 'pasien_id');
    // }
}
