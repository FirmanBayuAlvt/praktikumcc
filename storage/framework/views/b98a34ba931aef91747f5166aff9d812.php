<?php $__env->startSection('content'); ?>
    
    <main class="page">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('<?php echo e(Vite::asset('resources/images/hero_bg.png')); ?>')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Profil & Sejarah</b></div>
                <h1 class="display-6">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya</h1>
                <p class="mb-0">Temukan data profil dan sejarah Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                    Mari mengenal lebih dekat warisan, perkembangan, dan kehidupan masyarakat yang penuh semangat
                    kebersamaan.
                </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Profil Kelurahan</h2>
                <p>Kenali lebih dekat Kelurahan kami, pusat layanan masyarakat yang siap melayani dengan transparansi dan
                    komitmen. Bersama, membangun lingkungan yang nyaman dan harmonis.</p>
            </div>
            <div class="rounded-4 pt-4 px-4 mb-5 border">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="https://placehold.co/600x400?text=Menunggu+Gambar+Profil+Kelurahan..."
                            class="img-fluid rounded-4 mb-4 about_us_image" alt="Gambar Profil Kelurahan">
                    </div>
                    <div class="col-lg-7">
                        <div class="mb-4">
                            <h3 class="fs-4">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya</h3>
                            <hr>
                            <div class="full-width placeholder-glow">
                                <p class="mb-0 about_us_desc">
                                    <span class="placeholder col-12"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-3"></span>
                                    <span class="placeholder col-8"></span>
                                    <span class="placeholder col-7"></span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-geo-alt"></i> Alamat:</h4>
                                    <hr>
                                    <div class="full-width placeholder-glow">
                                        <p class="mb-0 web_address"><span class="placeholder col-10"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-geo"></i> Luas Wilayah:</h4>
                                    <hr>
                                    <div class="full-width placeholder-glow">
                                        <span class="mb-0 wide_area"><span class="placeholder col-4"></span></span>
                                        <span>Ha</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-envelope"></i> Email:</h4>
                                    <hr>
                                    <div class="full-width placeholder-glow">
                                        <p class="mb-0 web_email"><span class="placeholder col-8"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-telephone"></i> Telepon:</h4>
                                    <hr>
                                    <div class="full-width placeholder-glow">
                                        <p class="mb-0 web_telp"><span class="placeholder col-6"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-pin-map"></i> Batas Wilayah:</h4>
                                    <hr>
                                    <div class="d-flex flex-wrap">
                                        <div class="full-width placeholder-glow">
                                            <span><i class="bi bi-caret-right"></i> Batas Wilayah
                                                Utara:</span>
                                            <span class="mb-0 north_boundary"><span class="placeholder col-4"></span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="full-width placeholder-glow">
                                            <span><i class="bi bi-caret-right"></i> Batas Wilayah
                                                Selatan:</span>
                                            <span class="mb-0 south_boundary"><span class="placeholder col-4"></span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="full-width placeholder-glow">
                                            <span><i class="bi bi-caret-right"></i> Batas Wilayah
                                                Barat:</span>
                                            <span class="mb-0 west_boundary"><span class="placeholder col-4"></span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="full-width placeholder-glow">
                                            <span><i class="bi bi-caret-right"></i> Batas Wilayah
                                                Timur:</span>
                                            <span class="mb-0 east_boundary"><span class="placeholder col-4"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-people"></i> Media Sosial:</h4>
                                    <hr>
                                    <div class="d-flex">
                                        <a href="#" target="_blank" class="nav-link me-4 facebook_bottom">
                                            <div class="spinner-grow spinner-grow-lg text-secondary" role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </a>
                                        <a href="#" target="_blank" class="nav-link me-4 instagram_bottom">
                                            <div class="spinner-grow spinner-grow-lg text-secondary" role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </a>
                                        <a href="#" target="_blank" class="nav-link me-4 tiktok_bottom">
                                            <div class="spinner-grow spinner-grow-lg text-secondary" role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </a>
                                        <a href="#" target="_blank" class="nav-link me-4 twitter_bottom">
                                            <div class="spinner-grow spinner-grow-lg text-secondary" role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-5">&nbsp;</div>

            
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Sejarah Kelurahan</h2>
                <p>Menelusuri jejak sejarah Kelurahan kami, dari awal terbentuk hingga menjadi pusat pertumbuhan komunitas
                    yang dinamis. Kisah perjalanan yang kaya akan budaya dan semangat gotong royong.</p>
            </div>
            <div class="rounded-4 p-4 mt-3 mb-5 border">
                <div class="full-width placeholder-glow">
                    <p class="mb-0 history_desc">
                        <span class="placeholder col-12"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-3"></span>
                        <span class="placeholder col-8"></span>
                        <span class="placeholder col-7"></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/profil-sejarah/getApiData",
                success: function(response) {
                    const history = response.history.data[0].sejarah;
                    $('.history_desc').html(history != null ? history :
                        "Belum ada data..."
                    );
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/profile.blade.php ENDPATH**/ ?>