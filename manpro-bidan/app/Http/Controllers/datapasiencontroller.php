<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapasien;
class datapasiencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpasien = datapasien::all();
       return view('Datapasien',compact('dtpasien'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('IsiPasien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   dd($request->all());
    datapasien::create([
        'nama_pasien' => $request->nama_pasien,
        'ttl' => $request->ttl, // Sesuaikan dengan nama kolom yang sesuai di tabel database
        'nama_penanggung' => $request->nama_penanggung,
        'pembayaran_status' => $request->pembayaran_status,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp, // Sesuaikan dengan nama kolom yang sesuai di tabel database
    ]);

        return redirect('patients');

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
        $pasien = datapasien::findOrFail($id);
        $pasien->delete();
        return redirect('patients')->with('success', 'Data pasien berhasil dihapus.');
    }
}
