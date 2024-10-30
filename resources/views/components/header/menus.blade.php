<ul class="navbar-nav text-white">
    <li class="nav-item col-6 col-lg-auto"><a href="/" class="nav-link text-white active">Beranda</a></li>
    <li class="nav-item">
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"
                aria-expanded="false">
                Profil
            </button>
            <ul class="dropdown-menu border">
                <li><a class="dropdown-item" href="{{ route('profile') }}">Profil & Sejarah</a></li>
                <li><a class="dropdown-item" href="{{ route('tour') }}">Pariwisata</a></li>
                <li><a class="dropdown-item" href="{{ route('government') }}">Pemerintahan</a></li>
                <li><a class="dropdown-item" href="{{ route('demography') }}">Demografi</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"
                aria-expanded="false">
                Bidang
            </button>
            <ul class="dropdown-menu border">
                <li><a class="dropdown-item" href="{{ route('region') }}">Kewilayahan</a></li>
                <li><a class="dropdown-item" href="{{ route('community') }}">Kemasyarakatan</a></li>
                <li><a class="dropdown-item" href="{{ route('pkk') }}">PKK</a></li>
                <li><a class="dropdown-item" href="{{ route('plan') }}">Perencanaan</a></li>
                <li><a class="dropdown-item" href="{{ route('growth') }}">Pembangunan</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"
                aria-expanded="false">
                Inovasi & Prestasi
            </button>
            <ul class="dropdown-menu border">
                <li><a class="dropdown-item" href="{{ route('innovation') }}">Katalog Inovasi</a></li>
                <li><a class="dropdown-item" href="{{ route('achievement') }}">Daftar Prestasi</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"
                aria-expanded="false">
                Kemitraan
            </button>
            <ul class="dropdown-menu border">
                <li><a class="dropdown-item" href="{{ route('cooperation') }}">Kerjasama</a></li>
                <li><a class="dropdown-item" href="{{ route('assistance') }}">Bantuan Sosial</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"
                aria-expanded="false">
                Data
            </button>
            <ul class="dropdown-menu border">
                <li><a class="dropdown-item" href="{{ route('monography') }}">Kelurahan Dalam Angka</a></li>
                <li><a class="dropdown-item" href="{{ route('infographic') }}">Infografis Statistik</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle text-white"
                data-bs-toggle="dropdown"aria-expanded="false">
                Kontak
            </button>
            <ul class="dropdown-menu border">
                <li><a class="dropdown-item" href="{{ route('contactUs') }}">Hubungi Kami</a></li>
                <li><a class="dropdown-item" href="{{ route('opd') }}">Daftar OPD/Dinas</a></li>
                <li><a class="dropdown-item" href="{{ route('complaint') }}">Pengaduan Masyarakat</a></li>
            </ul>
        </div>
    </li>
</ul>
