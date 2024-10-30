@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Prestasi</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">Temukan data prestasi lengkap Kelurahan {{ env('WEB_NAME', '___') }} Surabaya!
                    Katalog prestasi dan lain-lain, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Daftar Prestasi</h2>
                <p>Lihat berbagai pencapaian yang telah diraih, dari penghargaan hingga inovasi yang membawa dampak positif
                    bagi masyarakat. Setiap prestasi adalah hasil kerja keras dan komitmen bersama untuk kemajuan.</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5 border rounded-4 p-4 mt-2">
                        <table id="achievement-table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Tingkat</th>
                                    <th>Prestasi</th>
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
@endsection

@section('ext_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
@endsection

@section('ext_script')
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/prestasi/getApiData",
                success: function(response) {
                    var achievementTableHtml = '';
                    if (response.achievement != null) {
                        response.achievement.data.forEach((element, index) => {
                            achievementTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.tahun}</td>
                                <td>${element.tingkat}</td>
                                <td>${element.prestasi}</td>
                            </tr>`;
                        });
                    }
                    $('#achievement-table tbody').html(achievementTableHtml);
                    new DataTable('#achievement-table');
                }
            });
        });
    </script>
@endsection
