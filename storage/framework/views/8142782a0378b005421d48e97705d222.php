<?php $__env->startSection('content'); ?>
    
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('<?php echo e(Vite::asset('resources/images/hero_bg.png')); ?>')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Kerjasama</b></div>
                <h1 class="display-6">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya</h1>
                <p class="mb-0">Temukan data kerjasama lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                    Katalog prestasi dan lain-lain, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Dokumen Kerjasama Kelurahan</h2>
                <p>Melalui kolaborasi dengan berbagai pihak, kami terus mengembangkan program-program yang mendukung
                    pembangunan, pemberdayaan, dan kesejahteraan masyarakat.</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5 border rounded-4 p-4 mt-2">
                        <table id="cooperation-table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Kerjasama</th>
                                    <th>Mitra</th>
                                    <th>Jangka Waktu</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                                            <span class="visually-hidden">Tunggu...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                                            <span class="visually-hidden">Tunggu...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                                            <span class="visually-hidden">Tunggu...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                                            <span class="visually-hidden">Tunggu...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                                            <span class="visually-hidden">Tunggu...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                                            <span class="visually-hidden">Tunggu...</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <div class="modal fade" id="cooperationDocModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="cooperationDocModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cooperationDocModalLabel"><i class="bi bi-file-earmark-pdf"></i>
                        Dokumen Kerjasama</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_script'); ?>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cooperationDocModal .modal-body').html(`
                <div class="text-center">
                    <div class="spinner-grow spinner-grow-xl text-secondary" role="status">
                        <span class="visually-hidden">Tunggu...</span>
                    </div>
                </div>
            `);

            $.ajax({
                url: "/kerjasama/getApiData",
                success: function(response) {
                    var cooperationTableHtml = '';
                    if (response.cooperation != null) {
                        response.cooperation.data.forEach((element, index) => {
                            cooperationTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.tanggal_dokumen_kerjasama}</td>
                                <td>${element.pihak_kerjasama}</td>
                                <td>${element.mitra_kerjasama}</td>
                                <td>${element.jangka_waktu} ${element.satuan}</td>
                                <td>
                                    <button class="btn btn-outline-primary btn-sm rounded-pill cooperation_view" data-id="${index}" data-bs-toggle="modal" data-bs-target="#cooperationDocModal">
                                        <i class="bi bi-file-earmark-pdf"></i> Lihat Dokumen
                                    </button>
                                </td>
                            </tr>`;
                        });
                    }
                    $('#cooperation-table tbody').html(cooperationTableHtml);
                    new DataTable('#cooperation-table');

                    $('.cooperation_view').on('click', function() {
                        $('#cooperationDocModal .modal-body').html(`
                            <div class="text-center">
                                <div class="spinner-grow spinner-grow-xl text-secondary" role="status">
                                    <span class="visually-hidden">Tunggu...</span>
                                </div>
                            </div>
                        `);
                        var id = $(this).data('id');
                        var cooperation = response.cooperation.data;
                        var pihakKerjasama = cooperation[id].pihak_kerjasama;
                        var mitraKerjasama = cooperation[id].mitra_kerjasama;
                        var jangkaWaktu = cooperation[id].jangka_waktu + ' ' + cooperation[id]
                            .satuan;
                        var tanggalDokumen = cooperation[id].tanggal_dokumen_kerjasama;
                        var perihalDokumen = cooperation[id].perihal_dokumen_kerjasama;
                        var fileUrl =
                            "https://assets.website-files.com/63206faf68ab2dc3ee3e623b/634ea60a9381021f775e7a28_Placeholder%20PDF.pdf";
                        var assetUrl = "<?php echo e(env('WEB_ASSET_URL_TUS')); ?>";
                        if (assetUrl != "https://cantik-internal-tus.vercel.app/storage/") {
                            fileUrl =
                                `<?php echo e(env('WEB_ASSET_URL_TUS')); ?>${cooperation[id].dokumen_kerjasama}`;
                        }
                        var cooperationHtml = `
                            <div class="row">
                                <div class="col-lg-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-body-secondary">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold">Kerjasama:</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="pihak_kerjasama">${pihakKerjasama}</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold">Mitra:</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="mitra_kerjasama">${mitraKerjasama}</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item bg-body-secondary">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold">Jangka Waktu:</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="jangka_waktu_kerjasama">${jangkaWaktu}</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold">Tanggal Dokumen:</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="tanggal_dokumen_kerjasama">${tanggalDokumen}</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item bg-body-secondary">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold">Perihal Dokumen:</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="perihal_dokumen_kerjasama">${perihalDokumen}</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <div class="rounded-4 border p-3">
                                        <embed type="application/pdf"
                                            src="${fileUrl}"
                                            width="100%" height="650"></embed>
                                    </div>
                                </div>
                            </div>
                        `;
                        $('#cooperationDocModal .modal-body').html(cooperationHtml)
                    });
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/cooperation.blade.php ENDPATH**/ ?>