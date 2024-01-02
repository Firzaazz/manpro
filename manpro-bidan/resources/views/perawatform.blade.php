

<!-- resources/views/datapasien/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Form Perawatan Pasien</h2>

    <!-- Tampilkan data perawatan pasien -->
    <table class="table">
        <thead>
            <tr>
                <th>Golongan Darah</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($perawatanData as $data)
                <tr>
                    <td>{{ $data->golongan_darah }}</td>
                    <td>{{ $data->berat_badan }}</td>
                    <td>{{ $data->tinggi_badan }}</td>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            @endforeach --}}
        </tbody>
    </table>

    <!-- Form untuk menambah data perawatan -->

    <form method="POST" action="{{route('perawatform')}}">
        {{ csrf_field() }}


            <div class="form-group">
                <label for="id_pasien">ID Pasien</label>
                <input type="text" class="form-control" id="id_pasien" name="id_pasien" required>
            </div>

            <div class="form-group">
                <label for="riwayat_penyakit_kronis">Riwayat Penyakit Kronis</label>
                <textarea class="form-control" id="riwayat_penyakit_kronis" name="riwayat_penyakit_kronis" required></textarea>
            </div>

            <div class="form-group">
                <label for="riwayat_penyakit_akut">Riwayat Penyakit Akut</label>
                <textarea class="form-control" id="riwayat_penyakit_akut" name="riwayat_penyakit_akut" required></textarea>
            </div>

            <div class="form-group">
                <label for="histori_operasi">Histori Operasi</label>
                <textarea class="form-control" id="histori_operasi" name="histori_operasi" required></textarea>
            </div>

            <div class="form-group">
                <label for="penggunaan_obat">Penggunaan Obat</label>
                <textarea class="form-control" id="penggunaan_obat" name="penggunaan_obat" required></textarea>
            </div>

            <div class="form-group">
                <label for="pemeriksaan_kepala_leher">Pemeriksaan Kepala Leher</label>
                <textarea class="form-control" id="pemeriksaan_kepala_leher" name="pemeriksaan_kepala_leher" required></textarea>
            </div>

            <div class="form-group">
                <label for="pemeriksaan_dada">Pemeriksaan Dada</label>
                <textarea class="form-control" id="pemeriksaan_dada" name="pemeriksaan_dada" required></textarea>
            </div>

            <div class="form-group">
                <label for="pemeriksaan_kardiovaskular">Pemeriksaan Kardiovaskular</label>
                <textarea class="form-control" id="pemeriksaan_kardiovaskular" name="pemeriksaan_kardiovaskular" required></textarea>
            </div>

            <div class="form-group">
                <label for="pemeriksaan_abdomen">Pemeriksaan Abdomen</label>
                <textarea class="form-control" id="pemeriksaan_abdomen" name="pemeriksaan_abdomen" required></textarea>
            </div>

            <div class="form-group">
                <label for="pemeriksaan_kulit">Pemeriksaan Kulit</label>
                <textarea class="form-control" id="pemeriksaan_kulit" name="pemeriksaan_kulit" required></textarea>
            </div>

            <div class="form-group">
                <label for="evaluasi_emosional">Evaluasi Emosional</label>
                <textarea class="form-control" id="evaluasi_emosional" name="evaluasi_emosional" required></textarea>
            </div>

            <div class="form-group">
                <label for="analisis_dukungan_sosial">Analisis Dukungan Sosial</label>
                <textarea class="form-control" id="analisis_dukungan_sosial" name="analisis_dukungan_sosial" required></textarea>
            </div>
            <div class="form-group">
                <label for="faktor_stres">Faktor Stres</label>
                <textarea class="form-control" id="faktor_stres" name="faktor_stres" required></textarea>
            </div>

            <div class="form-group">
                <label for="evaluasi_asupan_makanan">Evaluasi Asupan Makanan</label>
                <textarea class="form-control" id="evaluasi_asupan_makanan" name="evaluasi_asupan_makanan" required></textarea>
            </div>

            <div class="form-group">
                <label for="pengukuran_antropometri">Pengukuran Antropometri</label>
                <textarea class="form-control" id="pengukuran_antropometri" name="pengukuran_antropometri" required></textarea>
            </div>

            <div class="form-group">
                <label for="kebutuhan_nutrisi_khusus">Kebutuhan Nutrisi Khusus</label>
                <textarea class="form-control" id="kebutuhan_nutrisi_khusus" name="kebutuhan_nutrisi_khusus" required></textarea>
            </div>

            <div class="form-group">
                <label for="risiko_jatuh">Risiko Jatuh</label>
                <textarea class="form-control" id="risiko_jatuh" name="risiko_jatuh" required></textarea>
            </div>

            <div class="form-group">
                <label for="evaluasi_lingkungan">Evaluasi Lingkungan</label>
                <textarea class="form-control" id="evaluasi_lingkungan" name="evaluasi_lingkungan" required></textarea>
            </div>

            <div class="form-group">
                <label for="alat_bantu">Alat Bantu</label>
                <textarea class="form-control" id="alat_bantu" name="alat_bantu" required></textarea>
            </div>

            <div class="form-group">
                <label for="skala_nyeri">Skala Nyeri</label>
                <input type="number" class="form-control" id="skala_nyeri" name="skala_nyeri" required>
            </div>

            <div class="form-group">
                <label for="identifikasi_lokasi_nyeri">Identifikasi Lokasi Nyeri</label>
                <textarea class="form-control" id="identifikasi_lokasi_nyeri" name="identifikasi_lokasi_nyeri" required></textarea>
            </div>
            <div class="form-group">
                <label for="respons_terhadap_pengobatan_nyeri">Respons terhadap Pengobatan Nyeri</label>
                <textarea class="form-control" id="respons_terhadap_pengobatan_nyeri" name="respons_terhadap_pengobatan_nyeri" required>{{ old('respons_terhadap_pengobatan_nyeri') }}</textarea>
            </div>

            <!-- Pengkajian Kognitif -->
            <div class="form-group">
                <label for="penilaian_kesadaran_orientasi">Penilaian Kesadaran dan Orientasi</label>
                <textarea class="form-control" id="penilaian_kesadaran_orientasi" name="penilaian_kesadaran_orientasi">{{ old('penilaian_kesadaran_orientasi') }}</textarea>
            </div>

            <div class="form-group">
                <label for="identifikasi_perubahan_perilaku">Identifikasi Perubahan Perilaku</label>
                <textarea class="form-control" id="identifikasi_perubahan_perilaku" name="identifikasi_perubahan_perilaku">{{ old('identifikasi_perubahan_perilaku') }}</textarea>
            </div>

            <div class="form-group">
                <label for="evaluasi_kemampuan_keputusan">Evaluasi Kemampuan Keputusan</label>
                <textarea class="form-control" id="evaluasi_kemampuan_keputusan" name="evaluasi_kemampuan_keputusan">{{ old('evaluasi_kemampuan_keputusan') }}</textarea>
            </div>

            <!-- Pengkajian Spiritual -->
            <div class="form-group">
                <label for="identifikasi_kepercayaan_spiritual">Identifikasi Kepercayaan Spiritual</label>
                <textarea class="form-control" id="identifikasi_kepercayaan_spiritual" name="identifikasi_kepercayaan_spiritual">{{ old('identifikasi_kepercayaan_spiritual') }}</textarea>
            </div>

            <div class="form-group">
                <label for="dukungan_spiritual">Dukungan Spiritual</label>
                <textarea class="form-control" id="dukungan_spiritual" name="dukungan_spiritual">{{ old('dukungan_spiritual') }}</textarea>
            </div>
            <div class="form-group">
                <label for="analisis_laboratorium">Analisis Laboratorium</label>
                <textarea class="form-control" id="analisis_laboratorium" name="analisis_laboratorium">{{ old('analisis_laboratorium') }}</textarea>
            </div>

            <div class="form-group">
                <label for="interpretasi_radiologi">Interpretasi Radiologi</label>
                <textarea class="form-control" id="interpretasi_radiologi" name="interpretasi_radiologi">{{ old('interpretasi_radiologi') }}</textarea>
            </div>

            <!-- Pengkajian Perubahan -->
            <div class="form-group">
                <label for="evaluasi_perubahan_gejala">Evaluasi Perubahan Gejala</label>
                <textarea class="form-control" id="evaluasi_perubahan_gejala" name="evaluasi_perubahan_gejala">{{ old('evaluasi_perubahan_gejala') }}</textarea>
            </div>

            <div class="form-group">
                <label for="tinjau_riwayat_perkembangan">Tinjau Riwayat Perkembangan</label>
                <textarea class="form-control" id="tinjau_riwayat_perkembangan" name="tinjau_riwayat_perkembangan">{{ old('tinjau_riwayat_perkembangan') }}</textarea>
            </div>

            <!-- Kolaborasi dengan Tim Kesehatan Lain -->
            <div class="form-group">
                <label for="diskusi_dokter_spesialis">Diskusi Dokter Spesialis</label>
                <textarea class="form-control" id="diskusi_dokter_spesialis" name="diskusi_dokter_spesialis">{{ old('diskusi_dokter_spesialis') }}</textarea>
            </div>

            <div class="form-group">
                <label for="kolaborasi_ahli_gizi">Kolaborasi Ahli Gizi</label>
                <textarea class="form-control" id="kolaborasi_ahli_gizi" name="kolaborasi_ahli_gizi">{{ old('kolaborasi_ahli_gizi') }}</textarea>
            </div>

            <!-- Catatan dan Dokumentasi -->
            <div class="form-group">
                <label for="catatan_tindakan">Catatan Tindakan</label>
                <textarea class="form-control" id="catatan_tindakan" name="catatan_tindakan">{{ old('catatan_tindakan') }}</textarea>
            </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
