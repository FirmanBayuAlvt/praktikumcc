@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Hubungi Kami</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">Kami selalu siap mendengar dari Anda. Jika ada pertanyaan, saran, atau permintaan
                    informasi, jangan ragu untuk menghubungi kami.</p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="office_map rounded-4 border p-4 d-flex align-items-center justify-content-center"
                        style="width: 100%; min-height: 407px;">
                        <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 p-4 bg-body-secondary">
                        <h2 class="fs-3"><i class="bi bi-card-heading"></i> Hubungi Kami</h2>
                        <hr>
                        <p>Jika ada pertanyaan, kritik, saran, atau informasi lainnya, silahkan
                            hubungi kami melalui kontak di bawah ini.</p>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-geo-alt"></i> Alamat:</h4>
                                    <hr>
                                    <div class="full-width placeholder-glow">
                                        <p class="mb-0 web_address"><span class="placeholder col-10"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-envelope"></i> Email:</h4>
                                    <hr>
                                    <div class="full-width placeholder-glow">
                                        <p class="mb-0 web_email"><span class="placeholder col-8"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-4">
                                    <h4 class="fs-5"><i class="bi bi-telephone"></i> Telepon:</h4>
                                    <hr>
                                    <div class="full-width placeholder-glow">
                                        <p class="mb-0 web_telp"><span class="placeholder col-6"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
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
        </div>
    </section>
@endsection

@section('ext_css')
@endsection

@section('ext_script')
@endsection
