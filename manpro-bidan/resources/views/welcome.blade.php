<!-- Left Side Of Navbar -->
<ul class="navbar-nav me-auto">
    @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">Dasbor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/doctors') }}">Dokter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/patients') }}">Data Pasien</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/messages') }}">Pesan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/update-medical-record') }}">Perbarui Rekam Medis Pasien</a>
        </li>
    @endauth
</ul>
