
<!-- resources/views/datapasien/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Isi anamnesis') }}</div>
                    <div class="card-body">
                        <form action="{{route('simpananam')}}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="id_pasien">ID Pasien</label>
                                <input type="text" class="form-control" id="id_pasien" name="id_pasien">

                            </div>

                            <div class="form-group">
                                <label for="keluhan_utama">Keluhan Utama</label>
                                <input type="text" class="form-control" id="keluhan_utama" name="keluhan_utama">
                            </div>

                            <div class="form-group">
                                <label for="kunjungan_terakhir">kunjungan_terakhir</label>
                                <input type="date" class="form-control" id="ttl" name="kunjungan_terakhir" required>
                            </div>

                            <div class="form-group">
                                <label for="riwayat_penyakit_dahulu">Riwayat Penyakit Dahulu</label>
                                <textarea class="form-control" id="riwayat_penyakit_dahulu" name="riwayat_penyakit_dahulu"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="riwayat_alergi">Riwayat Alergi</label>
                                <input type="text" class="form-control" id="riwayat_alergi" name="riwayat_alergi">
                            </div>

                            <div class="form-group">
                                <label for="riwayat_kehamilan">Riwayat Kehamilan</label>
                                <input type="text" class="form-control" id="riwayat_kehamilan" name="riwayat_kehamilan">
                            </div>

                            <div class="form-group">
                                <label for="riwayat_kelahiran">Riwayat Kelahiran</label>
                                <input type="text" class="form-control" id="riwayat_kelahiran" name="riwayat_kelahiran">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
