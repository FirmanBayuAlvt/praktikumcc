@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Pengaduan Masyarakat</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">Kami selalu siap mendengar dari Anda. Jika ada pertanyaan, saran, atau permintaan
                    informasi, jangan ragu untuk menghubungi kami.</p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Form Pengaduan Masyarakat</h2>
                <p>Suara Anda penting bagi kami! Sampaikan keluhan, masukan, atau saran melalui form pengaduan ini, dan kami
                    siap menindaklanjuti demi menciptakan lingkungan yang lebih baik dan nyaman untuk semua warga.</p>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4 mt-2" src="{{ Vite::asset('resources/images/complaint.png') }}"
                        alt="Complaint Image">
                </div>
                <div class="col-lg-8">
                    <div class="mb-5 bg-body-secondary rounded-4 px-4 pt-4 pb-4 mt-2">
                        <form action="{{ route('complaint.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label for="fullname" class="form-label">Nama Lengkap:</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        placeholder="Silakan isi dengan nama lengkap">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK):</label>
                                    <input type="text" class="form-control" id="nik" name="nik"
                                        placeholder="Silakan isi dengan NIK">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="address" class="form-label">Alamat:</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Silakan isi dengan alamat">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label for="phone" class="form-label">Nomor Handphone / Whatsapp:</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Silakan isi dengan nomor HP / Whatsapp">
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <label for="complain_text" class="form-label">Uraikan pengaduan yang ingin
                                        disampaikan:</label>
                                    <textarea class="form-control" id="complain_text" rows="5" name="complain_text"></textarea>
                                </div>
                                <div class="col-lg-12 text-end">
                                    <button type="submit" class="btn btn-primary rounded-pill py-3 px-4">
                                        <i class="bi bi-floppy-fill me-1"></i>
                                        Simpan Pengaduan
                                    </button>
                                </div>
                            </div>
                        </form>
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
