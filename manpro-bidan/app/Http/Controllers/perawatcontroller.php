<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perawat;
class perawatcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('perawatform');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        perawat::create([
            'id_pasien' => $request->id_pasien,
            'riwayat_penyakit_kronis' => $request->riwayat_penyakit_kronis,
            'riwayat_penyakit_akut' => $request->riwayat_penyakit_akut,
            'histori_operasi' => $request->histori_operasi,
            'penggunaan_obat' => $request->penggunaan_obat,
            'pemeriksaan_kepala_leher' => $request->pemeriksaan_kepala_leher,
            'pemeriksaan_dada' => $request->pemeriksaan_dada,
            'pemeriksaan_kardiovaskular' => $request->pemeriksaan_kardiovaskular,
            'pemeriksaan_abdomen' => $request->pemeriksaan_abdomen,
            'pemeriksaan_kulit' => $request->pemeriksaan_kulit,
            'evaluasi_emosional' => $request->evaluasi_emosional,
            'analisis_dukungan_sosial' => $request->analisis_dukungan_sosial,
            'faktor_stres' => $request->faktor_stres,
            'evaluasi_asupan_makanan' => $request->evaluasi_asupan_makanan,
            'pengukuran_antropometri' => $request->pengukuran_antropometri,
            'kebutuhan_nutrisi_khusus' => $request->kebutuhan_nutrisi_khusus,
            'risiko_jatuh' => $request->risiko_jatuh,
            'evaluasi_lingkungan' => $request->evaluasi_lingkungan,
            'alat_bantu' => $request->alat_bantu,
            'skala_nyeri' => $request->skala_nyeri,
            'identifikasi_lokasi_nyeri' => $request->identifikasi_lokasi_nyeri,
            'respons_terhadap_pengobatan_nyeri' => $request->respons_terhadap_pengobatan_nyeri,
            'penilaian_kesadaran_orientasi' => $request->penilaian_kesadaran_orientasi,
            'identifikasi_perubahan_perilaku' => $request->identifikasi_perubahan_perilaku,
            'evaluasi_kemampuan_keputusan' => $request->evaluasi_kemampuan_keputusan,
            'identifikasi_kepercayaan_spiritual' => $request->identifikasi_kepercayaan_spiritual,
            'dukungan_spiritual' => $request->dukungan_spiritual,
            'analisis_laboratorium' => $request->analisis_laboratorium,
            'interpretasi_radiologi' => $request->interpretasi_radiologi,
            'evaluasi_perubahan_gejala' => $request->evaluasi_perubahan_gejala,
            'tinjau_riwayat_perkembangan' => $request->tinjau_riwayat_perkembangan,
            'diskusi_dokter_spesialis' => $request->diskusi_dokter_spesialis,
            'kolaborasi_ahli_gizi' => $request->kolaborasi_ahli_gizi,
            'catatan_tindakan' => $request->catatan_tindakan,
        ]);

        return redirect('dashboard'); // Sesuaikan dengan rute yang benar

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
