<?php $__env->startSection('content'); ?>
    
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('<?php echo e(Vite::asset('resources/images/hero_bg.png')); ?>')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Daftar OPD / Dinas</b></div>
                <h1 class="display-6">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya</h1>
                <p class="mb-0">Temukan data kontak lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                    Daftar kontak OPD dan Dinas, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Daftar Kontak OPD / Dinas</h2>
                <p>Kenali instansi-instansi yang berperan dalam pelayanan publik dan pembangunan. Setiap OPD dan dinas
                    memiliki fungsi penting untuk mendukung kesejahteraan masyarakat dan pertumbuhan wilayah.</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5 border rounded-4 p-4 mt-2">
                        <table id="opd-table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama OPD / Dinas</th>
                                    <th>Nama Kepala</th>
                                    <th>Telepon</th>
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_script'); ?>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/opd/getApiData",
                success: function(response) {
                    var opdDinasTableHtml = '';
                    if (response.opdDinas != null) {
                        response.opdDinas.data.forEach((element, index) => {
                            opdDinasTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama_opd}</td>
                                <td>${element.nama_kepala}</td>
                                <td>${element.telepon}</td>
                            </tr>`;
                        });
                    }
                    $('#opd-table tbody').html(opdDinasTableHtml);
                    new DataTable('#opd-table');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/opd.blade.php ENDPATH**/ ?>