<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> | Kelurahan Cinta Statistik Surabaya</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <?php echo $__env->yieldContent('ext_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
</head>

<body>
    <?php echo $__env->make('components.header.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content"><?php echo $__env->yieldContent('content'); ?></div>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.5.2.min.js"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/getBaseApiData",
                success: function(response) {
                    var generalDesc = response.generalDesc.data[0];
                    var welcomeImage = generalDesc.gambar_selamat_datang;
                    var welcomeImageUrl = `<?php echo e(env('WEB_ASSET_URL')); ?>${welcomeImage}`;
                    var aboutUsImage = generalDesc.gambar_tentang_kami;
                    var aboutUsImageUrl = `<?php echo e(env('WEB_ASSET_URL')); ?>${aboutUsImage}`;
                    var webEmail = generalDesc.email;
                    var webAddress = generalDesc.alamat;
                    var webTelp = generalDesc.telepon;
                    var wideArea = generalDesc.luas_wilayah;
                    var aboutUs = generalDesc.tentang_kami;
                    var north = generalDesc.batas_utara;
                    var south = generalDesc.batas_selatan;
                    var east = generalDesc.batas_timur;
                    var west = generalDesc.batas_barat;

                    $('.homepage .hero_img .spinner-grow').remove();
                    $('.homepage .hero_img').css('background-image',
                        `url(${welcomeImageUrl})`);

                    $('.homepage .hero_img').hover(function() {
                        $('.homepage .hero_img').css('opacity', '0,7');
                    });
                    $('.homepage .hero_img').css('cursor', 'pointer');
                    $('.homepage .hero_img').attr('data-bs-toggle', 'modal');
                    $('.homepage .hero_img').attr('data-bs-target', '#videoDocModal');
                    $('.homepage .hero_img').html(`
                        <div class="play_button text-light" style="font-size: 90px;">
                            <i class="bi bi-play-btn-fill m-0"></i>
                        </div>
                    `);

                    $('.video_link').on('click', function() {
                        $('#videoDocModal .modal-body iframe').remove();
                        $('#videoDocModal .modal-body .video_not_found').remove();
                        if (generalDesc.video_selamat_datang != null) {
                            $('#videoDocModal .modal-body').append(`
                                <iframe width="100%" height="500" src="${generalDesc.video_selamat_datang}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            `);
                        } else {
                            $('#videoDocModal .modal-body').append(`
                                <div class="video_not_found bg-body-secondary d-flex align-items-center justify-content-center text-secondary fs-4 rounded-4" style="height: 500px;">Belum ada video profil kelurahan...</div>
                            `);
                        }
                    });

                    $('.about_us_image').attr('src',
                        aboutUsImageUrl != null ? aboutUsImageUrl :
                        'https://placehold.co/600x400?text=Belum+ada+gambar...');
                    $(
                        '.wide_area').html(wideArea != null ? wideArea :
                        'Belum ada data...');
                    $('.web_address').html(webAddress != null ?
                        webAddress +
                        ', Surabaya, Jawa Timur, Indonesia.' : '-');
                    $('.web_email').html(
                        webEmail != null ? webEmail : '-');
                    $('.web_telp').html(webTelp !=
                        null ? webTelp : '-');
                    $('.about_us_desc').html(aboutUs != null ?
                        aboutUs : '-');
                    $('.north_boundary').html(north != null ? north :
                        '-');
                    $('.south_boundary').html(south != null ? south : '-');
                    $(
                        '.east_boundary').html(east != null ? east : '-');
                    $('.west_boundary')
                        .html(west != null ? west : '-');

                    var socialMedia = response.socialMedia.data[0];
                    var facebook = socialMedia.facebook;
                    var instagram = socialMedia.instagram;
                    var tiktok = socialMedia.tiktok;
                    var twitter = socialMedia.twitter;

                    $('#facebook_top').html(
                        `<i class="bi-facebook"></i><small class="ms-2 d-xl-none">Facebook</small></a>`
                    );
                    $('#facebook_top').attr('href', facebook != null ?
                        `https://facebook.com/${facebook}` : '#');

                    $('.facebook_bottom').html(
                        `<i class="bi bi-facebook fs-2"></i>`
                    );
                    $('.facebook_bottom').attr('href', facebook != null ?
                        `https://facebook.com/${facebook}` : '#');

                    $('#instagram_top').html(
                        `<i class="bi-instagram"></i><small class="ms-2 d-xl-none">Instagram</small></a>`
                    );
                    $('#instagram_top').attr('href', instagram != null ?
                        `https://instagram.com/${instagram}` : '#');

                    $('.instagram_bottom').html(
                        `<i class="bi bi-instagram fs-2"></i>`
                    );
                    $('.instagram_bottom').attr('href', instagram != null ?
                        `https://instagram.com/${instagram}` : '#');

                    $('#tiktok_top').html(
                        `<i class="bi-tiktok"></i><small class="ms-2 d-xl-none">Tiktok</small></a>`
                    );
                    $('#tiktok_top').attr('href', tiktok != null ?
                        `https://tiktok.com/${tiktok}` : '#');

                    $('.tiktok_bottom').html(
                        `<i class="bi bi-tiktok fs-2"></i>`
                    );
                    $('.tiktok_bottom').attr('href', tiktok != null ?
                        `https://tiktok.com/${tiktok}` : '#');

                    $('#twitter_top').html(
                        `<i class="bi-twitter"></i><small class="ms-2 d-xl-none">Twitter</small></a>`
                    );
                    $('#twitter_top').attr('href', twitter != null ?
                        `https://twitter.com/${twitter}` : '#');

                    $('.twitter_bottom').html(
                        `<i class="bi bi-twitter fs-2"></i>`
                    );
                    $('.twitter_bottom').attr('href', twitter != null ?
                        `https://twitter.com/${twitter}` : '#');

                    var long = generalDesc.longitude;
                    var lat = generalDesc.latitude;
                    $('.office_map .spinner-grow').remove();
                    if (long != null && lat != null) {
                        $('.office_map').html(`
                            <iframe src="//maps.google.com/maps?q=${lat},${long}&z=15&output=embed" width="100%" height="396" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        `);
                    } else {
                        $('.office_map').html(`
                            <iframe src="//maps.google.com/maps?q=-6.2293135,106.5176738&z=15&output=embed" width="100%" height="396" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        `);
                    }
                }
            });
        });
    </script>
    <?php echo $__env->yieldContent('ext_script'); ?>
</body>

</html>
<?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/layouts/app.blade.php ENDPATH**/ ?>