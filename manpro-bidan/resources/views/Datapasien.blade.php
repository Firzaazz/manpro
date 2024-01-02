@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mx-auto" style="width: 110%; margin-left: -45%;">
                    <div class="card-header d-flex justify-content-between align-items-center" style="padding: 10px;">
                        <span style="font-size: 20px;">{{ __('Data pasien') }}</span>
                        <a href="{{ route('IsiPasien') }}" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
                    </div>
                    <div class="card-body" style="padding: 20px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pasien</th>
                                    <th>TTL</th>
                                    <th>Nama Penanggung</th>
                                    <th>Pembayaran Status</th>
                                    <th>Alamat</th>
                                    <th>No. Telp</th>
                                    <th>Aksi</th> <!-- Tambah kolom Aksi untuk tombol Hapus -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Tampilkan data pasien di sini -->
                                @foreach ($dtpasien as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_pasien }}</td>
                                    <td>{{ $item->ttl }}</td>
                                    <td>{{ $item->nama_penanggung }}</td>
                                    <td>{{ $item->pembayaran_status }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                    <td>
                                        <form action="{{ route('patients.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
