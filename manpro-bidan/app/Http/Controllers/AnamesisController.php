<?php

namespace App\Http\Controllers;

use App\Models\Anamesis;
use Illuminate\Http\Request;


class AnamesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $dtAnamesis = Anamesis::all();
    return view('dashboard', compact('dtAnamesis'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Isianam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Anamesis::create([
        'id_pasien'=> $request->id_pasien,
        'keluhan_utama'=> $request->keluhan_utama,
        'riwayat_penyakit_dahulu'=> $request->riwayat_penyakit_dahulu,
        'riwayat_alergi'=> $request->riwayat_alergi,
        'riwayat_kehamilan'=> $request->riwayat_kehamilan,
        'riwayat_kelahiran'=> $request->riwayat_kelahiran ?? null, // atau berikan nilai default
        'kunjungan_terakhir'=> $request->kunjungan_terakhir,

        ]);
        return redirect('dashboard');
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
