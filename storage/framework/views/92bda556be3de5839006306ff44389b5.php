<?php $__env->startSection('content'); ?>
    
    <main class="homepage">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('<?php echo e(Vite::asset('resources/images/hero_bg.png')); ?>')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="greetings px-1">
                            <div class="text-warning fw-bold fs-4"><b>Kelurahan Cinta
                                    Statistik (Cantik)
                                    Surabaya</b>
                            </div>
                            <h1 class="display-3">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?></h1>
                            <p class="fs-5">
                                Selamat datang di website Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya! Temukan data
                                statistik
                                lengkap dan berbagai
                                konten bermanfaat lainnya yang siap memenuhi kebutuhan informasi anda secara mudah dan
                                terpercaya.
                            </p>
                            <a href="<?php echo e(route('profile')); ?>" class="btn btn-light btn-lg rounded-pill">Profil
                                Kelurahan Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center">
                        <div class="video_link hero_img rounded-4 border border-3 border-light d-flex align-items-center justify-content-center"
                            style="background-size: cover; background-position: center; height: 350px; width: 100%; z-index: 99;">
                            <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <section>
        <div class="container py-5">
            <div class="row my-3">
                <div class="col-lg-5">
                    <div class="section_divider bg-warning mb-2"></div>
                    <h2 class="mb-4 display-5">Demografi Kelurahan</h2>
                    <p class="fs-5">Temukan data demografi lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                        Dari jumlah penduduk, hingga tingkat pendidikan, semua informasi disajikan secara jelas dan mudah
                        diakses.</p>
                    <a href="<?php echo e(route('demography')); ?>" class="btn btn-primary btn-lg rounded-pill mt-3">Demografi Lainnya
                        <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-7">
                    <div class="bg-body-secondary p-5 rounded-4 d-flex align-items-center justify-content-center statistic_section"
                        style="min-height: 300px;">
                        <div class="text-secondary" id="genderSpinner">
                            <div class="spinner-grow" style="width: 2rem; height: 2rem;" role="status">
                                <span class="visually-hidden">Tunggu...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container py-5">
            <div class="row my-3">
                <div class="col-lg-5">
                    <div class="section_divider bg-warning mb-2"></div>
                    <h2 class="mb-4 display-5">Peta Kewilayahan</h2>
                    <p class="fs-5">Temukan data kewilayahan lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                        Sarana & prasarana dan lain-lain, semua informasi disajikan secara jelas dan mudah
                        diakses.</p>
                    <a href="<?php echo e(route('region')); ?>" class="btn btn-primary btn-lg rounded-pill mt-3">Data
                        Selengkapnya
                        <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-7">
                    <div class="bg-body-secondary rounded-4" style="min-height: 400px;">
                        <div id="map" class="border rounded-4" style="height: 400px; position: relative;">
                            <div id="checkbox-container" class="fs-6"
                                style="position: absolute; top: 10px; right: 10px; z-index: 1000; background: rgba(255, 255, 255, 0.8); padding: 5px; border-radius: 4px;">
                                <input type="checkbox" id="formal" checked> <label for="formal">Pendidikan
                                    formal</label><br>
                                <input type="checkbox" id="industri"> <label for="industri">Industri dan
                                    perdagangan</label><br>
                                <input type="checkbox" id="keagamaan"> <label for="keagamaan">Keagamaan</label><br>
                                <input type="checkbox" id="kebudayaan"> <label for="kebudayaan">Kebudayaan</label><br>
                                <input type="checkbox" id="kesehatan"> <label for="kesehatan">Kesehatan</label><br>
                                <input type="checkbox" id="komunikasi"> <label for="komunikasi">Komunikasi</label><br>
                                <input type="checkbox" id="nonFormal"> <label for="nonFormal">Pendidikan non
                                    formal</label><br>
                                <input type="checkbox" id="olahraga"> <label for="olahraga">Olahraga</label><br>
                                <input type="checkbox" id="pantiSosial"> <label for="pantiSosial">Panti
                                    Sosial</label><br>
                                <input type="checkbox" id="pariwisata"> <label for="pariwisata">Pariwisata</label><br>
                                <input type="checkbox" id="perhubungan"> <label for="perhubungan">Perhubungan</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-body-secondary">
        <div class="container pt-5 pb-4 my-3">
            <div class="row justify-content-center py-3 mx-4">
                <div class="col-lg-3 text-center mb-5">
                    <div class="display-1 fw-bold" id="rw">
                        <div class="spinner-grow text-secondary" role="status">
                            <span class="visually-hidden">Tunggu...</span>
                        </div>
                    </div>
                    <div class="display-6">RW</div>
                </div>
                <div class="col-lg-3 text-center mb-5">
                    <div class="display-1 fw-bold" id="rt">
                        <div class="spinner-grow text-secondary" role="status">
                            <span class="visually-hidden">Tunggu...</span>
                        </div>
                    </div>
                    <div class="display-6">RT</div>
                </div>
                <div class="col-lg-6 text-center mb-5">
                    <div class="display-1 fw-bold wide_area">
                        <div class="spinner-grow text-secondary" role="status">
                            <span class="visually-hidden">Tunggu...</span>
                        </div>
                    </div>
                    <div class="display-6">LUAS (Ha)</div>
                </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-5">Cinta Statistik</h2>
                <p>Membangun kebijakan yang tepat berbasis data! Kami berkomitmen mendukung penggunaan
                    statistik untuk
                    perencanaan pembangunan yang akurat dan efektif demi kesejahteraan warga.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="rounded-5 bg-primary-subtle p-4 mb-3 text-center">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <i class="bi bi-file-earmark-bar-graph text-primary" style="font-size: 150px;"></i>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <div>
                                    <div class="text-center">
                                        <h2 class="mb-0">Kelurahan Dalam Angka</h2>
                                    </div>
                                    <hr>
                                    <p>Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya dalam angka!
                                        Berkas publikasi kelurahan, semua informasi disajikan secara jelas dan mudah
                                        diakses.</p>
                                    <div class="d-grid mt-1">
                                        <a href="<?php echo e(route('monography')); ?>"
                                            class="btn btn-outline-primary text-decoration-none rounded-pill">Selengkapnya
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rounded-5 bg-warning-subtle p-4 mb-3 text-center">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <i class="bi bi-file-earmark-image text-warning" style="font-size: 150px;"></i>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <div>
                                    <div class="text-center">
                                        <h2 class="mb-0">Infografis Statistik</h2>
                                    </div>
                                    <hr>
                                    <p>Infografis lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                                        Visualisasi data kelurahan, semua informasi disajikan secara jelas dan
                                        mudah
                                        diakses.</p>
                                    <div class="d-grid mt-1">
                                        <a href="<?php echo e(route('infographic')); ?>"
                                            class="btn btn-outline-warning text-decoration-none rounded-pill">Selengkapnya
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rounded-5 bg-danger-subtle p-4 mb-3 text-center">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <i class="bi bi-database-gear text-danger" style="font-size: 150px;"></i>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <div>
                                    <div class="text-center">
                                        <h2 class="mb-0">Satu Data Kelurahan</h2>
                                    </div>
                                    <hr>
                                    <p>Satu data seluruh kelurahan di Surabaya! Semua informasi disajikan secara jelas
                                        dan
                                        mudah diakses dari mana dan kapan saja.</p>
                                    <div class="d-grid mt-1">
                                        <a href="#"
                                            class="btn btn-outline-danger text-decoration-none rounded-pill">Selengkapnya
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-body-secondary">
        <div class="container py-5 mb-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-5">Berita Terkini</h2>
                <p>Dapatkan update terbaru seputar kegiatan dan perkembangan di Kelurahan kami. Tetap terinformasi dengan
                    berita terkini yang penting untuk warga dan komunitas!</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0 rounded-4 mb-4">
                        <a href="#">
                            <img src="https://picsum.photos/600/400" class="card-img-top rounded-top-4"
                                alt="Thumbnail Image" style="height: 250px;">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Indeks Kepuasan Masyarakat Kelurahan Gayungan Semester I Tahun 2024
                            </h4>
                            <div class="d-flex align-items-center text-secondary">
                                <i class="bi bi-calendar-event me-2"></i>
                                <small>20 Agustus 2024</small>
                            </div>
                            <hr>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been
                                the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#" class="text-decoration-none">Baca Semua <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 rounded-4 mb-4">
                        <a href="#">
                            <img src="https://picsum.photos/600/500" class="card-img-top rounded-top-4"
                                alt="Thumbnail Image" style="height: 250px;">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Indeks Kepuasan Masyarakat Kelurahan Gayungan Semester I Tahun 2024
                            </h4>
                            <div class="d-flex align-items-center text-secondary">
                                <i class="bi bi-calendar-event me-2"></i>
                                <small>20 Agustus 2024</small>
                            </div>
                            <hr>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been
                                the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#" class="text-decoration-none">Baca Semua <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 rounded-4 mb-4">
                        <a href="#">
                            <img src="https://picsum.photos/600/600" class="card-img-top rounded-top-4"
                                alt="Thumbnail Image" style="height: 250px;">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Indeks Kepuasan Masyarakat Kelurahan Gayungan Semester I Tahun 2024
                            </h4>
                            <div class="d-flex align-items-center text-secondary">
                                <i class="bi bi-calendar-event me-2"></i>
                                <small>20 Agustus 2024</small>
                            </div>
                            <hr>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been
                                the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#" class="text-decoration-none">Baca Semua <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary btn-block btn-lg rounded-pill">Berita Selengkapnya <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container text-center py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-5">Video Kegiatan</h2>
                <p>Saksikan beragam kegiatan seru dan inspiratif di Kelurahan kami melalui video! Dari gotong royong hingga
                    acara komunitas, lihat bagaimana warga bersama-sama membangun lingkungan yang lebih baik.</p>
            </div>
            <div class="act_video_slider" id="act_video_slider">
                <div class="row card-group">
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="<?php echo e(route('video')); ?>" class="btn btn-primary btn-block btn-lg rounded-pill">Video Lainnya <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container p-5 text-center mb-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-5">Aparatur Kelurahan</h2>
                <p>Berkenalan dengan aparatur Kelurahan kami, tim berdedikasi yang siap melayani dengan profesionalisme dan
                    integritas tinggi untuk kesejahteraan warga dan kemajuan lingkungan.</p>
            </div>
            <div class="aparatur_slider" id="aparatur_slider">
                <div class="row card-group">
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                            <div class="p-5">
                                <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container text-center py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-5">Sinergi Program</h2>
                <p>Wujudkan perubahan positif melalui sinergi program Kelurahan kami! Bersama warga, kami menciptakan
                    kolaborasi untuk membangun lingkungan yang lebih maju, aman, dan sejahtera.</p>
            </div>
            <div class="row justify-content-center rounded-4 py-3 mx-1 bg-body-secondary">
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <div class="flex-fill m-3">
                        <a href="https://www.kemendesa.go.id/" target="_blank">
                            <img src="<?php echo e(Vite::asset('resources/images/logo_kemendes.png')); ?>"
                                alt="Logo Kementerian Desa" height="100">
                        </a>
                    </div>
                    <div class="flex-fill m-3">
                        <a href="https://jatimprov.go.id/" target="_blank">
                            <img src="<?php echo e(Vite::asset('resources/images/logo_pemprov_jatim.png')); ?>"
                                alt="Logo Pemprov Jatim" height="100">
                        </a>
                    </div>
                    <div class="flex-fill m-3">
                        <a href="https://surabaya.go.id/" target="_blank">
                            <img src="<?php echo e(Vite::asset('resources/images/logo_surabaya.png')); ?>" alt="Logo Pemkot Surabaya"
                                height="100">
                        </a>
                    </div>
                    <div class="flex-fill m-3">
                        <a href="https://surabayakota.bps.go.id/" target="_blank">
                            <img src="<?php echo e(Vite::asset('resources/images/logo_bps.png')); ?>" alt="Logo BPS Surabaya"
                                height="100">
                        </a>
                    </div>
                    <div class="flex-fill m-3">
                        <a href="https://surabaya.telkomuniversity.ac.id/" target="_blank">
                            <img src="<?php echo e(Vite::asset('resources/images/logo_telu_sby.png')); ?>"
                                alt="Logo Telkom University Surabaya" height="70">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <div class="modal fade" id="videoDocModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="videoDocModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-relative">
                    <button type="button" class="btn btn-close bg-light py-3 close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5">&nbsp;</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.awesome-markers/2.0.0/css/leaflet.awesome-markers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .close {
            position: absolute;
            top: -80px;
            right: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
            width: 65px;
            padding-bottom: 9px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_script'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.awesome-markers/2.0.0/leaflet.awesome-markers.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/beranda/getApiData",
                success: function(response) {
                    var man = response.genderDemography.data[0]['laki-laki'];
                    var woman = response.genderDemography.data[0]['perempuan'];
                    var total = man + woman;
                    var source = 'Sumber: ' + response.genderDemography.data[0]['source'];

                    $('#genderSpinner').remove();
                    $('#genderSourceChart').html(source);

                    $('.statistic_section').append(`
                        <div class="row">
                            <div class="col-lg-8">
                                <canvas id="genderBarChart"></canvas>
                            </div>
                            <div class="col-lg-4">
                                <canvas id="genderDoughnutChart"></canvas>
                            </div>
                        </div>
                    `);

                    var genderBarChart = document.getElementById('genderBarChart');
                    new Chart(genderBarChart, {
                        type: 'bar',
                        data: {
                            labels: ['Laki-laki', 'Perempuan', 'Total'],
                            datasets: [{
                                label: 'Jumlah Pendudukan Berdasarkan Jenis Kelamin',
                                data: [man, woman, total],
                                borderWidth: 1,
                                // backgroundColor: [
                                //     '#181C14',
                                //     '#3C3D37',
                                //     '#697565',
                                // ],
                                borderRadius: 10
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    var genderDoughnutChart = document.getElementById('genderDoughnutChart');
                    new Chart(genderDoughnutChart, {
                        type: 'doughnut',
                        data: {
                            labels: [
                                'Laki-laki',
                                'Perempuan',
                            ],
                            datasets: [{
                                data: [man, woman],
                                // backgroundColor: [
                                //     '#181C14',
                                //     '#3C3D37',
                                // ],
                                hoverOffset: 4
                            }]
                        }
                    });

                    var rw = response.rtRwLpmk.data[1].jumlah;
                    var rt = response.rtRwLpmk.data[2].jumlah;

                    $('#rw').html(rw != null ? rw : '-');
                    $('#rt').html(rt != null ? rt : '-');

                    var structuralStaff = response.structuralStaff.data;
                    var staffHtml = '';
                    structuralStaff.forEach(element => {
                        staffHtml += `
                            <div class="p-3">
                                <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                                    <div class="p-4">
                                        <div class="rounded-4" style="width: 100%; height: 250px; background-image: url(<?php echo e(env('WEB_ASSET_URL')); ?>${element.foto}); background-size: cover;"></div>
                                    </div>
                                    <div class="card-body pb-4 px-4 pt-0 d-flex align-items-center justify-content-center flex-column" style="height: 100px;">
                                        <h6 class="card-title">${element.nama_pegawai}</h6>
                                        <p class="text-secondary lh-1 mb-0"><small>${element.jabatan}</small></p>
                                    </div>
                                </div>
                            </div>`;
                    });

                    $('#aparatur_slider').html(staffHtml);

                    $('#aparatur_slider').slick({
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        responsive: [{
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3,
                                    infinite: true,
                                    dots: true
                                }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });

                    var actVideo = response.actVideo.data.slice(0, 4);
                    var actVideoHtml = '';
                    var heightVid = 400;
                    actVideo.forEach((element, index) => {
                        var actVideoThumbnail =
                            `https://picsum.photos/600/${heightVid+index}`;
                        var assetUrl = "<?php echo e(env('WEB_ASSET_URL_TUS')); ?>";

                        if (assetUrl != "https://cantik-internal-tus.vercel.app/storage/") {
                            actVideoThumbnail =
                                `<?php echo e(env('WEB_ASSET_URL_TUS')); ?>${element.gambar_thumbnail}`;
                        }
                        actVideoHtml += `
                            <div class="col-lg-3">
                                <a href="${element.url}" target="_blank">
                                    <div class="border-0 mb-4">
                                        <div class="video_thumbnail rounded-4"
                                            style="background-image: url(${actVideoThumbnail}); background-size: cover; background-position: center;">
                                            <div class="play_button">
                                                <i class="bi bi-play-btn-fill m-0"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        `;
                    });
                    $('#act_video_slider .card-group').html(actVideoHtml);
                }
            });

            let map;
            let mapInitialized = false;
            let mapData;

            function initMap(data) {
                if (mapInitialized || !mapData) return;
                const mapContainer = document.getElementById('map');
                const map = L.map(mapContainer).setView([-7.331029, 112.722475], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                }).addTo(map);

                const categoryIcons = {
                    'formal': 'graduation-cap',
                    'industri': 'industry',
                    'keagamaan': 'church',
                    'kebudayaan': 'paint-brush',
                    'kesehatan': 'hospital',
                    'komunikasi': 'phone',
                    'nonFormal': 'book',
                    'olahraga': 'volleyball',
                    'pantiSosial': 'home',
                    'pariwisata': 'camera',
                    'perhubungan': 'bus'
                };

                const categoryColors = {
                    'formal': 'red',
                    'industri': 'green',
                    'keagamaan': 'blue',
                    'kebudayaan': 'yellow',
                    'kesehatan': 'purple',
                    'komunikasi': 'cyan',
                    'nonFormal': 'pink',
                    'olahraga': 'black',
                    'pantiSosial': 'purple',
                    'pariwisata': 'orange',
                    'perhubungan': 'silver'
                };

                const markers = {};

                Object.keys(data).forEach(category => {
                    const categoryData = data[category].data;
                    markers[category] = [];

                    categoryData.forEach(item => {
                        const lat = parseFloat(item.latitude);
                        const lng = parseFloat(item.longitude);

                        if (!isNaN(lat) && !isNaN(lng)) {
                            const icon = L.AwesomeMarkers.icon({
                                icon: categoryIcons[category],
                                markerColor: categoryColors[category],
                                prefix: 'fa'
                            });

                            const marker = L.marker([lat, lng], {
                                    icon: icon
                                })
                                .bindPopup(item.nama);

                            markers[category].push(marker);

                            const checkbox = document.getElementById(category);
                            if (checkbox && checkbox.checked) {
                                marker.addTo(map);
                            }
                        } else {
                            console.log('Invalid Lat/Lng:', lat, lng);
                        }
                    });
                });

                Object.keys(categoryColors).forEach(category => {
                    const checkbox = document.getElementById(category);
                    if (checkbox) {
                        checkbox.addEventListener('change', function() {
                            toggleMarkers(category, this.checked, markers, map);
                        });

                        if (category === 'formal') {
                            checkbox.checked = true;
                        } else {
                            checkbox.checked = false;
                        }
                    } else {
                        console.error(`Checkbox with ID ${category} not found`);
                    }
                });
            }

            function toggleMarkers(category, show, markers, map) {
                if (markers[category]) {
                    markers[category].forEach(marker => {
                        if (show) {
                            if (!map.hasLayer(marker)) {
                                marker.addTo(map);
                            }
                        } else {
                            if (map.hasLayer(marker)) {
                                marker.remove();
                            }
                        }
                    });
                }
            }

            $.ajax({
                url: "/kewilayahan/getApiData",
                success: function(response) {
                    mapData = response;
                    initMap(response);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/home.blade.php ENDPATH**/ ?>