<ul class="navbar-nav text-white">
    <li class="nav-item col-6 col-lg-auto"><a href="/" class="nav-link text-white active">Beranda</a></li>
    <li class="nav-item">
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"
                aria-expanded="false">
                Profil
            </button>
            <ul class="dropdown-menu border">
                <li><a class="dropdown-item" href="<?php echo e(route('profile')); ?>">Profil & Sejarah</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('tour')); ?>">Pariwisata</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('government')); ?>">Pemerintahan</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('demography')); ?>">Demografi</a></li>
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
                <li><a class="dropdown-item" href="<?php echo e(route('region')); ?>">Kewilayahan</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('community')); ?>">Kemasyarakatan</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('pkk')); ?>">PKK</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('plan')); ?>">Perencanaan</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('growth')); ?>">Pembangunan</a></li>
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
                <li><a class="dropdown-item" href="<?php echo e(route('innovation')); ?>">Katalog Inovasi</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('achievement')); ?>">Daftar Prestasi</a></li>
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
                <li><a class="dropdown-item" href="<?php echo e(route('cooperation')); ?>">Kerjasama</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('assistance')); ?>">Bantuan Sosial</a></li>
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
                <li><a class="dropdown-item" href="<?php echo e(route('monography')); ?>">Kelurahan Dalam Angka</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('infographic')); ?>">Infografis Statistik</a></li>
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
                <li><a class="dropdown-item" href="<?php echo e(route('contactUs')); ?>">Hubungi Kami</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('opd')); ?>">Daftar OPD/Dinas</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('complaint')); ?>">Pengaduan Masyarakat</a></li>
            </ul>
        </div>
    </li>
</ul>
<?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/components/header/menus.blade.php ENDPATH**/ ?>