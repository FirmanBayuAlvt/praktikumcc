@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Pembangunan</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">Temukan data pembangunan lengkap Kelurahan {{ env('WEB_NAME', '___') }} Surabaya!
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
@endsection

@section('ext_css')
@endsection

@section('ext_script')
@endsection
