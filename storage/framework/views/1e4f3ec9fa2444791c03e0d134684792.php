<nav class="navbar fixed-top navbar-expand-xl navbar-tus bg-primary">
    <div class="container">
        
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1">
            <div class="d-flex align-items-center">
                <img src="<?php echo e(Vite::asset('resources/images/logo_surabaya.png')); ?>" alt="Logo Surabaya" height="50">
                
            </div>
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <hr class="d-xl-none text-white">
            <?php echo $__env->make('components.header.menus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <hr class="d-xl-none text-white">
            <ul class="navbar-nav ms-md-auto">
                <?php echo $__env->make('components.header.social_media', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <hr class="d-xl-none text-white">
                <?php echo $__env->make('components.header.color_modes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
            <div class="d-xl-none mb-2"></div>
        </div>
    </div>
</nav>
<?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/components/header/index.blade.php ENDPATH**/ ?>