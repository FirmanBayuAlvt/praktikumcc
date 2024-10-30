<?php $__env->startSection('content'); ?>
    
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('<?php echo e(Vite::asset('resources/images/hero_bg.png')); ?>')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Pembangunan</b></div>
                <h1 class="display-6">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya</h1>
                <p class="mb-0">Temukan data pembangunan lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                    Proyek kelurahan dan lain-lain, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Alur Realisasi Pembangunan</h2>
                <p>Alur realisasi pembangunan Kelurahan, dari perencanaan hingga pelaksanaan, kami informasikan proses
                    pembangunan untuk hasil yang transparan, efisien, dan bermanfaat bagi seluruh masyarakat.</p>
            </div>
            <div class="alert alert-warning p-3 rounded-4 mx-1 text-start">
                <div class="rounded-4 p-4 mt-3 mb-5 border text-center">
                    <img src="https://pemerintahan.surabaya.go.id/basis-data/images/alur_pembangunan.jpg" alt="Alur Perencanaan" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/growth.blade.php ENDPATH**/ ?>