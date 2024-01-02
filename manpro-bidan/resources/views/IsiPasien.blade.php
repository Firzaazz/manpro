<!-- resources/views/datapasien/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Data Pasien') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('simpanPasien') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="nama_pasien">Nama Pasien</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
                            </div>

                            <div class="form-group">
                                <label for="ttl">TTL</label>
                                <input type="date" class="form-control" id="ttl" name="ttl" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_penanggung">Nama Penanggung</label>
                                <input type="text" class="form-control" id="nama_penanggung" name="nama_penanggung" required>
                            </div>

                            <div class="form-group">
                                <label for="pembayaran_status">Pembayaran Status</label>
                                <input type="text" class="form-control" id="pembayaran_status" name="pembayaran_status" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>

                            <div class="form-group">
                                <label for="no_telp">No. Telp</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                            </div>


                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
