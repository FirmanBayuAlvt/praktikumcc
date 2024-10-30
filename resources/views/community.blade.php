@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Kemasyarakatan</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">Temukan data kemasyarakatan lengkap Kelurahan {{ env('WEB_NAME', '___') }} Surabaya!
                    Data LPMK, hingga RT RW, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Data Kemasyarakatan Kelurahan</h2>
                <p>Informasi lengkap data kemasyarakatan Kelurahan kami! Temukan detail LPMK, serta daftar nama ketua RT dan
                    RW yang berperan aktif dalam membangun dan memperkuat
                    komunitas.</p>
            </div>
            <ul class="nav nav-pills justify-content-center" id="communityTab">
                <li class="nav-item">
                    <button class="nav-link rounded-5 active py-3 px-4" id="lpmk-tab" data-bs-toggle="tab"
                        data-bs-target="#lpmk-tab-pane" type="button" role="tab">LPMK, RW, RT</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link rounded-5 py-3 px-4" id="kader-tab" data-bs-toggle="tab"
                        data-bs-target="#kader-tab-pane" type="button" role="tab">Kader Surabaya Hebat</button>
                </li>
            </ul>
            <div class="tab-content" id="communityTabContent">
                <div class="tab-pane fade show active" id="lpmk-tab-pane">
                    <div class="mb-5 border rounded-4 p-4 mt-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <div
                                    class="rounded-4 bg-body-secondary p-4 mb-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bank fs-2 me-3"></i>
                                    <h3 class="mb-0 d-flex">
                                        <div class="me-2" id="lpmk_amount">
                                            <div class="spinner-grow text-secondary" role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </div>
                                        <div>LPMK</div>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div
                                    class="rounded-4 bg-body-secondary p-4 mb-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-check fs-2 me-3"></i>
                                    <h3 class="mb-0 d-flex">
                                        <div class="me-2" id="rw_amount">
                                            <div class="spinner-grow text-secondary" role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </div>
                                        <div>RW</div>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div
                                    class="rounded-4 bg-body-secondary p-4 mb-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-check fs-2 me-3"></i>
                                    <h3 class="mb-0 d-flex">
                                        <div class="me-2" id="rt_amount">
                                            <div class="spinner-grow text-secondary" role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </div>
                                        <div>RT</div>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-12">
                                <table id="community-table" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Lembaga</th>
                                            <th>Ketua</th>
                                            <th>Periode</th>
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
                <div class="tab-pane fade show" id="kader-tab-pane"></div>
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
                url: "/kemasyarakatan/getApiData",
                success: function(response) {
                    // Institution Amount
                    var lpmk = response.institutionAmount.data[0].jumlah;
                    var rw = response.institutionAmount.data[1].jumlah;
                    var rt = response.institutionAmount.data[2].jumlah;
                    $('#lpmk_amount').html(lpmk != null ? lpmk : '-');
                    $('#rw_amount').html(rw != null ? rw : '-');
                    $('#rt_amount').html(rt != null ? rt : '-');

                    // Institution Lead
                    var communityTableHtml = '';
                    if (response.institutionLead != null) {
                        response.institutionLead.data.forEach((element, index) => {
                            var institution = element.lembaga;
                            var rw = element.rw;
                            var rt = element.rt;
                            var institutionVal = '';

                            if (institution == 'LPMK') {
                                institutionVal = 'LPMK';
                            }
                            if (rw != 0) {
                                institutionVal += `RW ${rw} `;
                            }
                            if (rt != 0) {
                                institutionVal += `RT ${rt} `;
                            }

                            communityTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${institutionVal}</td>
                                <td>${element.ketua_lembaga}</td>
                                <td>${element.periode}</td>
                                <td>${element.telepon}</td>
                            </tr>`;
                        });
                    }
                    $('#community-table tbody').html(communityTableHtml);
                    new DataTable('#community-table');
                }
            });
        });
    </script>
@endsection
