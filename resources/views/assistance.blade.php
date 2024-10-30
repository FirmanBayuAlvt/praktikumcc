@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings text-center">
                <div class="text-warning fw-bold fs-4"><b>Bantuan Sosial</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">
                    Temukan data bantuan sosial lengkap Kelurahan {{ env('WEB_NAME', '___') }} Surabaya! Katalog bantuan
                    sosial dan lain-lain, semua informasi disajikan secara jelas dan mudah diakses.
                </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container p-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Dokumen Bantuan Sosial</h2>
                <p>Bantuan Sosial Kelurahan hadir untuk meringankan beban warga yang membutuhkan. Kami berkomitmen
                    menyalurkan bantuan secara tepat sasaran, transparan, dan berkelanjutan.
                </p>
            </div>
            <div class="rounded-4 p-5 border mb-5">
                <div class="assistance_slider mt-4 text-center" id="assistance_slider">
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

    {{-- Modal --}}
    <div class="modal fade" id="assistanceDocModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="assistanceDocModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="assistanceDocModalLabel"><i class="bi bi-file-earmark-pdf"></i>
                        Dokumen Bantuan Sosial</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('ext_css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <style>
        .assistance_link {
            cursor: pointer;
        }

        .assistance_link:hover {
            opacity: 0.7;
        }
    </style>
@endsection

@section('ext_script')
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/bantuan/getApiData",
                success: function(response) {
                    // Assistance
                    var assistanceData = response.assistance.data;
                    var assistanceHtml = '';
                    if (assistanceData.length != 0) {
                        assistanceData.forEach((element, index) => {
                            assistanceHtml += `
                                <div class="px-3 assistance_link" data-index="${index}" data-bs-toggle="modal" data-bs-target="#assistanceDocModal">
                                    <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                                        <div>
                                            <div class="rounded-top-4 d-flex align-items-center justify-content-center">
                                                <i class="bi bi-file-earmark-pdf" style="font-size: 150px;"></i>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 pb-4 pt-0 d-flex align-items-center justify-content-center flex-column">
                                            <div class="card-title mb-0 text-decoration-none">${element.nama_bantuan}</div>
                                        </div>
                                    </div>
                                </div>
                            `
                        });
                        $('#assistance_slider').html(assistanceHtml);
                        $('#assistance_slider').slick({
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
                        $('.assistance_link').on('click', function() {
                            $('#assistanceDocModal .modal-body').html(`
                                <div class="text-center">
                                    <div class="spinner-grow spinner-grow-xl text-secondary" role="status">
                                        <span class="visually-hidden">Tunggu...</span>
                                    </div>
                                </div>
                            `);
                            var index = $(this).data('index');
                            var content = assistanceData[index];

                            var fileUrl =
                                "https://assets.website-files.com/63206faf68ab2dc3ee3e623b/634ea60a9381021f775e7a28_Placeholder%20PDF.pdf";
                            var assetUrl = "{{ env('WEB_ASSET_URL_TUS') }}";

                            if (assetUrl != "https://cantik-internal-tus.vercel.app/storage/") {
                                fileUrl =
                                    `{{ env('WEB_ASSET_URL_TUS') }}${content.file_bantuan}`;
                            }

                            var assistanceContentHtml = `
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-body-secondary">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="fw-bold">Nama Dokumen:</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>${content.nama_bantuan}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item mb-3">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="fw-bold">Deskripsi Dokumen:</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>${content.keterangan_bantuan}</div>
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
                            $('#assistanceDocModal .modal-body').html(assistanceContentHtml)
                        });

                    } else {
                        assistanceHtml = `
                        <div class="rounded-4 p-4 bg-body-secondary text-center">
                            <div class="text-secondary">Belum ada data...</div>
                        </div>
                    `;
                        $('#assistance_slider').html(assistanceHtml);
                    }
                }
            });
        });
    </script>
@endsection
