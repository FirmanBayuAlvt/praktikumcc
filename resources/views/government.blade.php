@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Pemerintahan</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">Temukan data pemerintahan lengkap Kelurahan {{ env('WEB_NAME', '___') }} Surabaya!
                    Visi & misi sampai data kepegawaian, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Visi & Misi Kota Surabaya</h2>
                <p>Melangkah bersama menuju Surabaya yang lebih maju! Temukan visi dan misi kota dalam mewujudkan
                    pembangunan berkelanjutan, pelayanan terbaik, dan kesejahteraan untuk seluruh warganya.</p>
            </div>
            <div class="rounded-4 p-4 mb-5 bg-body-secondary">
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <h3 class="fs-3 text-center"><i class="bi bi-broadcast"></i> Visi</h3>
                        <div class="full-width placeholder-glow text-center">
                            <p class="mb-0 vision_statement">
                                <span class="placeholder col-12"></span>
                                <span class="placeholder col-6"></span>
                                <span class="placeholder col-4"></span>
                                <span class="placeholder col-7"></span>
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-8"></span>
                            </p>
                        </div>
                        <h3 class="fs-3 mt-4 text-center"><i class="bi bi-signpost-2"></i> Misi</h3>
                        <div class="full-width placeholder-glow text-center">
                            <p class="mb-0 mission_statement">
                                <span class="placeholder col-12"></span>
                                <span class="placeholder col-6"></span>
                                <span class="placeholder col-4"></span>
                                <span class="placeholder col-7"></span>
                                <span class="placeholder col-3"></span>
                                <span class="placeholder col-8"></span>
                            </p>
                        </div>
                    </div>
                </div> --}}
                <div class="row mb-3">
                    <div class="col-lg-2 text-end">
                        <h3 class="fs-3 mb-0">Visi:</h3>
                    </div>
                    <div class="col-lg-10 pt-1">
                        <p class="mb-0 fw-bold ms-2">"Gotong royong menuju kota dunia yang maju, humanis, dan
                            berkelanjutan."</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-2 text-end">
                        <h3 class="fs-3 mb-0">Misi:</h3>
                    </div>
                    <div class="col-lg-10 pt-1">
                        <ol>
                            <li>
                                <p>Mewujudkan perekonomian inklusif untuk meningkatkan kesejahteraan
                                    rakyat
                                    dan pembukaan
                                    lapangan kerja baru melalui penguatan kemandirian ekonomi lokal, kondusifitas iklim
                                    investasi, penguatan daya saing surabaya sebagai pusat penghubung perdagangan dan jasa
                                    antar
                                    pulau serta internasional.</p>
                            </li>
                            <li>
                                <p>Membangun sumber daya manusia (SDM) unggul, sehat jasmani dan rohani, produktif serta
                                    berkarakter melalui peningkatan ekses dan kualitas pelayanan kesehatan, pendidikan dan
                                    kebutuhan dasar lainnya.</p>
                            </li>
                            <li>
                                <p>Memantapkan penataan ruang kota yang terintegrasi melalui ketersediaan infrastruktur dan
                                    utilitas kota yang modern berkelas dunia serta berkelanjutan.</p>
                            </li>
                            <li>
                                <p>Memantapkan transformasi birokrasi yang bersih, dinamis dan tangkas berbasis digital
                                    untuk meningkatkan kualitas pelayanan publik.</p>
                            </li>
                            <li>
                                <p>Menciptakan ketertiban, keamanan, kerukunan sosial dan kepastian hukum yang berkeadilan.
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <ul class="nav nav-pills" id="govTab">
                <li class="nav-item">
                    <button class="nav-link rounded-5 py-3 px-4 active" id="gov-lead-staff-tab" data-bs-toggle="tab"
                        data-bs-target="#gov-lead-staff-tab-pane" type="button" role="tab">Pemerintah
                        Kelurahan</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link rounded-5 py-3 px-4" id="gov-duties-tab" data-bs-toggle="tab"
                        data-bs-target="#gov-duties-tab-pane" type="button" role="tab">Tugas dan Fungsi</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link rounded-5 py-3 px-4" id="gov-lead-tab" data-bs-toggle="tab"
                        data-bs-target="#gov-lead-tab-pane" type="button" role="tab">Profil Lurah</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link rounded-5 py-3 px-4" id="gov-staff-tab" data-bs-toggle="tab"
                        data-bs-target="#gov-staff-tab-pane" type="button" role="tab">Data Kepegawaian</button>
                </li>
            </ul>
            <div class="tab-content" id="govTabContent">
                <div class="tab-pane fade show active" id="gov-lead-staff-tab-pane">
                    <div class="mb-5 border rounded-4 px-4 pt-4 mt-4">
                        <h2 class="fs-3"><i class="bi bi-patch-check"></i> Pegawai Struktural Kelurahan</h2>
                        <hr>
                        <div class="row card-group text-center gov_lead_staff">
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
                <div class="tab-pane fade show" id="gov-duties-tab-pane">
                    <div class="mb-5 border rounded-4 p-4 mt-4">
                        <h3 class="fs-3"><i class="bi bi-file-earmark-pdf"></i> Peraturan Walikota Nomor 94
                            Tahun 2021 tentang
                            Kedudukan, Susunan Organisasi, Uraian Tugas dan
                            Fungsi Serta Tata Kerja Kecamatan dan Kelurahan Kota Surabaya.</h3>
                        <hr>
                        <div>
                            <embed type="application/pdf" src="{{ asset('files/perwali_2021.pdf') }}" width="100%"
                                height="1000"></embed>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="gov-lead-tab-pane">
                    <div class="mb-5 border rounded-4 p-4 mt-4">

                    </div>
                </div>
                <div class="tab-pane fade show" id="gov-staff-tab-pane">
                    <div class="mb-5 border rounded-4 px-4 pt-4 mt-4">
                        <h2 class="fs-3"><i class="bi bi-person"></i> Pegawai Kelurahan</h2>
                        <hr>
                        <div class="row card-group text-center gov_staff">
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
            </div>
        </div>
    </section>
@endsection

@section('ext_css')
@endsection

@section('ext_script')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/pemerintahan/getApiData",
                success: function(response) {
                    // Vision Mission
                    var vision = response.visionMission.data[0].visi;
                    var mission = response.visionMission.data[0].misi;
                    $('.vision_statement').html(vision != null ? vision :
                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                    );
                    $('.mission_statement').html(mission != null ? mission :
                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                    );

                    // Structural Staff
                    var structuralStaff = response.structuralStaff.data;
                    var structuralStaffHtml = '';
                    structuralStaff.forEach(element => {
                        structuralStaffHtml += `
                            <div class="col-lg-3">
                                <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                                    <div class="p-4">
                                        <div class="rounded-4" style="width: 100%; height: 250px; background-image: url({{ env('WEB_ASSET_URL') }}${element.foto}); background-size: cover;"></div>
                                    </div>
                                    <div class="card-body pb-4 px-4 pt-0 align-items-center justify-content-center flex-column" style="height: 100px;">
                                        <h6 class="card-title">${element.nama_pegawai}</h6>
                                        <p class="text-secondary lh-1 mb-0"><small>${element.jabatan}</small></p>
                                    </div>
                                </div>
                            </div>`;
                    });
                    $('.gov_lead_staff').html(structuralStaffHtml);

                    // Gov Staff
                    var govStaff = response.govStaff.data;
                    var govStaffHtml = '';
                    govStaff.forEach(element => {
                        govStaffHtml += `
                            <div class="col-lg-3">
                                <div class="card border-0 rounded-4 mb-4 bg-body-secondary">
                                    <div class="p-4">
                                        <div class="rounded-4" style="width: 100%; height: 250px; background-image: url({{ env('WEB_ASSET_URL') }}${element.foto}); background-size: cover;"></div>
                                    </div>
                                    <div class="card-body pb-4 px-4 pt-0 align-items-center justify-content-center flex-column" style="height: 100px;">
                                        <h6 class="card-title">${element.nama_pegawai}</h6>
                                        <p class="text-secondary lh-1 mb-0"><small>${element.jabatan}</small></p>
                                    </div>
                                </div>
                            </div>`;
                    });
                    $('.gov_staff').html(govStaffHtml);
                }
            });
        });
    </script>
@endsection
