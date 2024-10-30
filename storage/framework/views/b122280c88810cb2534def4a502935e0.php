<?php $__env->startSection('content'); ?>
    
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('<?php echo e(Vite::asset('resources/images/hero_bg.png')); ?>')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Inovasi</b></div>
                <h1 class="display-6">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya</h1>
                <p class="mb-0">Temukan data inovasi lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                    Katalog inovasi dan lain-lain, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container p-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Katalog Inovasi</h2>
                <p>Jelajahi Katalog Inovasi Kelurahan kami! Temukan berbagai inisiatif kreatif dan solusi cerdas yang kami
                    terapkan untuk meningkatkan layanan, memperbaiki infrastruktur, dan memberdayakan masyarakat.</p>
            </div>
            <div class="rounded-4 p-5 border mb-5">
                <div class="innovation_slider mt-4 text-center" id="innovation_slider">
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

            <div class="my-5">&nbsp;</div>
        </div>
    </section>

    
    <div class="modal fade" id="innovationDocModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="innovationDocModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="innovationDocModalLabel"><i class="bi bi-file-earmark-pdf"></i>
                        Dokumen Inovasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <style>
        .innovation_link {
            cursor: pointer;
        }

        .innovation_link:hover {
            opacity: 0.7;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_script'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/inovasi/getApiData",
                success: function(response) {
                    // Inovasi
                    var innovationData = response.innovation.data;
                    var innovationHtml = '';
                    var heightVid = 400;
                    if (innovationData.length != 0) {
                        innovationData.forEach((element, index) => {
                            var imgUrl = `https://picsum.photos/600/${heightVid+index}`;
                            var assetUrl = "<?php echo e(env('WEB_ASSET_URL_TUS')); ?>";

                            if (assetUrl != "https://cantik-internal-tus.vercel.app/storage/") {
                                imgUrl = `<?php echo e(env('WEB_ASSET_URL_TUS')); ?>${element.gambar}`;
                            }

                            innovationHtml += `
                                <div class="px-3 innovation_link" data-index="${index}" data-bs-toggle="modal" data-bs-target="#innovationDocModal">
                                    <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                                        <div>
                                            <div class="rounded-top-4" style="width: 100%; height: 250px; background-image: url(${imgUrl}); background-size: cover;"></div>
                                        </div>
                                        <div class="card-body p-2 d-flex align-items-center justify-content-center flex-column">
                                            <small class="card-title mb-0 text-secondary text-decoration-none">${element.nama_inovasi}</small>
                                        </div>
                                    </div>
                                </div>
                            `
                        });
                        $('#innovation_slider').html(innovationHtml);
                        $('#innovation_slider').slick({
                            dots: true,
                            infinite: true,
                            speed: 300,
                            slidesToShow: 4,
                            slidesToScroll: 4,
                            centerMode: false,
                            adaptiveHeight: true,
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
                                        slidesToScroll: 2,
                                        infinite: true,
                                        dots: true
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        infinite: true,
                                        dots: true
                                    }
                                }
                            ]
                        });
                        $('.innovation_link').on('click', function() {
                            $('#innovationDocModal .modal-body').html(`
                                <div class="text-center">
                                    <div class="spinner-grow spinner-grow-xl text-secondary" role="status">
                                        <span class="visually-hidden">Tunggu...</span>
                                    </div>
                                </div>
                            `);
                            var index = $(this).data('index');
                            var content = innovationData[index];

                            var fileUrl =
                                "https://assets.website-files.com/63206faf68ab2dc3ee3e623b/634ea60a9381021f775e7a28_Placeholder%20PDF.pdf";
                            var assetUrl = "<?php echo e(env('WEB_ASSET_URL_TUS')); ?>";

                            if (assetUrl != "https://cantik-internal-tus.vercel.app/storage/") {
                                fileUrl = `<?php echo e(env('WEB_ASSET_URL_TUS')); ?>${content.file}`;
                            }

                            var imgUrl = `https://picsum.photos/600/${heightVid}`;
                            if (assetUrl != "https://cantik-internal-tus.vercel.app/storage/") {
                                imgUrl = `<?php echo e(env('WEB_ASSET_URL_TUS')); ?>${element.gambar}`;
                            }

                            var innovationContentHtml = `
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-body-secondary">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="fw-bold">Nama Dokumen:</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>${content.nama_inovasi}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="fw-bold">Deskripsi Dokumen:</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>${content.deskripsi}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item bg-body-secondary mb-3">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="fw-bold">Sampul Dokumen:</div>
                                                    </div>
                                                    <div class="col-lg-8 p-3">
                                                        <div class="rounded-4" style="width: 100%; height: 300px; background-image: url(${imgUrl}); background-size: cover;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="rounded-4 border p-3">
                                            <embed type="application/pdf" src="${fileUrl}" width="100%" height="650"></embed>
                                        </div>
                                    </div>
                                </div>
                            `;
                            $('#innovationDocModal .modal-body').html(innovationContentHtml)
                        });

                    } else {
                        innovationHtml = `
                            <div class="rounded-4 p-4 bg-body-secondary text-center">
                                <div class="text-secondary">Belum ada data...</div>
                            </div>
                        `;
                        $('#innovation_slider').html(innovationHtml);
                    }
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/innovation.blade.php ENDPATH**/ ?>