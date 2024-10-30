@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('{{ Vite::asset('resources/images/hero_bg.png') }}')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Demografi Kelurahan</b></div>
                <h1 class="display-6">Kelurahan {{ env('WEB_NAME', '___') }} Surabaya</h1>
                <p class="mb-0">Temukan data demografi lengkap Kelurahan {{ env('WEB_NAME', '___') }} Surabaya!
                    Dari jumlah penduduk, hingga tingkat pendidikan, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Demografi Penduduk</h2>
                <p>Mengetahui lebih dalam tentang demografi penduduk kami. Data lengkap jumlah, komposisi, dan perkembangan
                    penduduk sebagai dasar perencanaan yang tepat untuk kesejahteraan masyarakat.</p>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="mb-3 rounded-4 p-4 bg-body-secondary">
                        <div class="list-group list-group-flush rounded-3" id="demoTab">
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between py-3 px-4 active"
                                id="demo-1-tab" data-bs-toggle="tab" data-bs-target="#demo-1-tab-pane">
                                <div><i class="bi bi-people me-2"></i>Jenis Kelamin</div><i
                                    class="bi bi-chevron-right me-1"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between py-3 px-4"
                                id="demo-2-tab" data-bs-toggle="tab" data-bs-target="#demo-2-tab-pane">
                                <div><i class="bi bi-box2-heart me-2"></i>Usia</div><i class="bi bi-chevron-right me-1"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between py-3 px-4"
                                id="demo-3-tab" data-bs-toggle="tab" data-bs-target="#demo-3-tab-pane">
                                <div><i class="bi bi-tv me-2"></i>Pendidikan</div><i class="bi bi-chevron-right me-1"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between py-3 px-4"
                                id="demo-4-tab" data-bs-toggle="tab" data-bs-target="#demo-4-tab-pane">
                                <div><i class="bi bi-person-workspace me-2"></i>Pekerjaan</div><i
                                    class="bi bi-chevron-right me-1"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between py-3 px-4"
                                id="demo-5-tab" data-bs-toggle="tab" data-bs-target="#demo-5-tab-pane">
                                <div><i class="bi bi-journal-check me-2"></i>Agama</div><i
                                    class="bi bi-chevron-right me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="mb-5 border rounded-4 p-4">
                        <div class="tab-content" id="demoTabContent">
                            {{-- Jenis Kelamin --}}
                            <div class="tab-pane fade show active" id="demo-1-tab-pane">
                                <h3 class="fs-5"><i class="bi bi-chevron-right"></i> Berdasarkan Jenis Kelamin</h3>
                                <hr>
                                <div>
                                    <div class="d-flex flex-grow align-items-center justify-content-center mt-5 text-secondary"
                                        id="genderSpinner">
                                        <div class="spinner-grow text-secondary" style="width: 2rem; height: 2rem;"
                                            role="status">
                                            <span class="visually-hidden">Tunggu...</span>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold"><span id="genderSourceChart"></span></h5>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <canvas id="genderBarChart"></canvas>
                                        </div>
                                        <div class="col-lg-4">
                                            <canvas id="genderDoughnutChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Usia --}}
                            <div class="tab-pane fade show" id="demo-2-tab-pane">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <h3 class="fs-5 mb-0"><i class="bi bi-chevron-right"></i> Berdasarkan Usia</h3>
                                    <ul class="nav nav-pills" id="ageTab">
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4 active" id="age-graphic-tab"
                                                data-bs-toggle="tab" data-bs-target="#age-graphic-tab-pane" type="button"
                                                role="tab">Data
                                                Grafik</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4" id="age-table-tab"
                                                data-bs-toggle="tab" data-bs-target="#age-table-tab-pane" type="button"
                                                role="tab">Data
                                                Tabel</button>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="tab-content" id="ageTabContent">
                                    <div class="tab-pane fade show active" id="age-graphic-tab-pane">
                                        <div class="d-flex align-items-center justify-content-center mt-5 text-secondary"
                                            id="ageSpinner">
                                            <div class="spinner-grow text-secondary" style="width: 2rem; height: 2rem;"
                                                role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <canvas id="ageBarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="age-table-tab-pane">
                                        <table id="age-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Usia</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- Pendidikan --}}
                            <div class="tab-pane fade show" id="demo-3-tab-pane">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <h3 class="fs-5 mb-0"><i class="bi bi-chevron-right"></i> Berdasarkan
                                        Pendidikan
                                    </h3>
                                    <ul class="nav nav-pills" id="educationTab">
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4 active" id="education-graphic-tab"
                                                data-bs-toggle="tab" data-bs-target="#education-graphic-tab-pane"
                                                type="button" role="tab">Data Grafik</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4" id="education-table-tab"
                                                data-bs-toggle="tab" data-bs-target="#education-table-tab-pane"
                                                type="button" role="tab">Data
                                                Tabel</button>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="tab-content" id="ageTabContent">
                                    <div class="tab-pane fade show active" id="education-graphic-tab-pane">
                                        <div class="d-flex align-items-center justify-content-center mt-5 text-secondary"
                                            id="educationSpinner">
                                            <div class="spinner-grow text-secondary" style="width: 2rem; height: 2rem;"
                                                role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </div>
                                        <h5 class="fw-bold"><span id="educationSourceChart"></span></h5>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <canvas id="educationDoughnutChart"></canvas>
                                            </div>
                                            <div class="col-lg-7">
                                                <canvas id="educationBarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="education-table-tab-pane">
                                        <table id="education-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pendidikan</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- Pekerjaan --}}
                            <div class="tab-pane fade show" id="demo-4-tab-pane">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <h3 class="fs-5 mb-0"><i class="bi bi-chevron-right"></i> Berdasarkan Pekerjaan
                                    </h3>
                                    <ul class="nav nav-pills" id="jobTab">
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4 active" id="job-graphic-tab"
                                                data-bs-toggle="tab" data-bs-target="#job-graphic-tab-pane"
                                                type="button" role="tab">Data Grafik</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4" id="job-table-tab"
                                                data-bs-toggle="tab" data-bs-target="#job-table-tab-pane" type="button"
                                                role="tab">Data
                                                Tabel</button>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="tab-content" id="jobTabContent">
                                    <div class="tab-pane fade show active" id="job-graphic-tab-pane">
                                        <div class="d-flex align-items-center justify-content-center mt-5 text-secondary"
                                            id="jobSpinner">
                                            <div class="spinner-grow text-secondary" style="width: 2rem; height: 2rem;"
                                                role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </div>
                                        <h5 class="fw-bold"><span id="jobSourceChart"></span></h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <canvas id="jobBarChart"></canvas>
                                            </div>
                                            {{-- <div class="col-lg-4">
                                                <canvas id="jobDoughnutChart"></canvas>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="job-table-tab-pane">
                                        <table id="job-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- Agama --}}
                            <div class="tab-pane fade show" id="demo-5-tab-pane">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <h3 class="fs-5 mb-0"><i class="bi bi-chevron-right"></i> Berdasarkan Agama
                                    </h3>
                                    <ul class="nav nav-pills" id="religionTab">
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4 active" id="religion-graphic-tab"
                                                data-bs-toggle="tab" data-bs-target="#religion-graphic-tab-pane"
                                                type="button" role="tab">Data Grafik</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link rounded-5 py-3 px-4" id="religion-table-tab"
                                                data-bs-toggle="tab" data-bs-target="#religion-table-tab-pane"
                                                type="button" role="tab">Data
                                                Tabel</button>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="tab-content" id="religionTabContent">
                                    <div class="tab-pane fade show active" id="religion-graphic-tab-pane">
                                        <div class="d-flex align-items-center justify-content-center mt-5 text-secondary"
                                            id="religionSpinner">
                                            <div class="spinner-grow text-secondary" style="width: 2rem; height: 2rem;"
                                                role="status">
                                                <span class="visually-hidden">Tunggu...</span>
                                            </div>
                                        </div>
                                        <h5 class="fw-bold"><span id="religionSourceChart"></span></h5>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <canvas id="religionDoughnutChart"></canvas>
                                            </div>
                                            <div class="col-lg-8">
                                                <canvas id="religionBarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="religion-table-tab-pane">
                                        <table id="religion-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Agama</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
@endsection

@section('ext_script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/demografi/getApiData",
                success: function(response) {
                    // genderDemography
                    const man = response.genderDemography.data[0]['laki-laki'];
                    const woman = response.genderDemography.data[0]['perempuan'];
                    const total = man + woman;
                    const source = 'Sumber: ' + response.genderDemography.data[0]['source'];

                    $('#genderSpinner').remove();
                    $('#genderSourceChart').html(source);

                    const genderBarChart = document.getElementById('genderBarChart');
                    new Chart(genderBarChart, {
                        type: 'bar',
                        data: {
                            labels: ['Laki-laki', 'Perempuan', 'Total'],
                            datasets: [{
                                label: 'Jumlah Pendudukan Berdasarkan Jenis Kelamin',
                                data: [man, woman, total],
                                borderWidth: 1,
                                // backgroundColor: [
                                //     '#181C14',
                                //     '#3C3D37',
                                //     '#697565',
                                // ],
                                borderRadius: 10
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    const genderDoughnutChart = document.getElementById('genderDoughnutChart');
                    new Chart(genderDoughnutChart, {
                        type: 'doughnut',
                        data: {
                            labels: [
                                'Laki-laki',
                                'Perempuan',
                            ],
                            datasets: [{
                                data: [man, woman],
                                // backgroundColor: [
                                //     '#181C14',
                                //     '#3C3D37',
                                // ],
                                hoverOffset: 4
                            }]
                        }
                    });

                    // ageDemography
                    const ageLabels = response.ageDemography.data.map((item) => item.label_usia +
                        ' tahun');
                    const ageData = response.ageDemography.data.map((item) => item['laki-laki'] + item[
                        'perempuan']);

                    $('#ageSpinner').remove();
                    const ageBarChart = document.getElementById('ageBarChart');
                    new Chart(ageBarChart, {
                        type: 'bar',
                        data: {
                            labels: ageLabels,
                            datasets: [{
                                label: 'Jumlah Pendudukan Berdasarkan Usia',
                                data: ageData,
                                borderWidth: 1,
                                // backgroundColor: '#3C3D37',
                                borderRadius: 10
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    var ageTableHtml = '';
                    if (response.ageDemography != null) {
                        response.ageDemography.data.forEach((element, index) => {
                            ageTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.label_usia} tahun</td>
                                <td>${element['laki-laki']} orang</td>
                                <td>${element.perempuan} orang</td>
                                <td>${element['laki-laki']+element.perempuan} orang</td>
                            </tr>`;
                        });
                    }
                    $('#age-table tbody').html(ageTableHtml);
                    new DataTable('#age-table');

                    // educationDemography
                    const educationLabels = response.educationDemography.data.map((item) => item
                        .pendidikan);
                    const educationData = response.educationDemography.data.map((item) => item[
                        'laki-laki'] + item[
                        'perempuan']);

                    $('#educationSpinner').remove();
                    const educationBarChart = document.getElementById('educationBarChart');
                    new Chart(educationBarChart, {
                        type: 'bar',
                        data: {
                            labels: educationLabels,
                            datasets: [{
                                label: 'Jumlah Pendudukan Berdasarkan Pendidikan',
                                data: educationData,
                                borderWidth: 1,
                                borderRadius: 10,
                                // backgroundColor: '#758694',
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    const educationDoughnutChart = document.getElementById('educationDoughnutChart');
                    new Chart(educationDoughnutChart, {
                        type: 'doughnut',
                        data: {
                            labels: educationLabels,
                            datasets: [{
                                data: educationData,
                                hoverOffset: 4
                            }]
                        }
                    });

                    var educationTableHtml = '';
                    if (response.educationDemography != null) {
                        response.educationDemography.data.forEach((element, index) => {
                            educationTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.pendidikan}</td>
                                <td>${element['laki-laki']} orang</td>
                                <td>${element.perempuan} orang</td>
                                <td>${element['laki-laki']+element.perempuan} orang</td>
                            </tr>`;
                        });
                    }
                    $('#education-table tbody').html(educationTableHtml);
                    new DataTable('#education-table');

                    // jobDemography
                    const jobLabels = response.jobDemography.data.map((item) => item.pekerjaan);
                    const jobData = response.jobDemography.data.map((item) => item['laki-laki'] + item[
                        'perempuan']);

                    $('#jobSpinner').remove();
                    const jobBarChart = document.getElementById('jobBarChart');
                    new Chart(jobBarChart, {
                        type: 'bar',
                        data: {
                            labels: jobLabels,
                            datasets: [{
                                label: 'Jumlah Pendudukan Berdasarkan Pekerjaan',
                                data: jobData,
                                borderWidth: 1,
                                borderRadius: 10,
                                // backgroundColor: '#758694',
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    const jobDoughnutChart = document.getElementById('jobDoughnutChart');
                    new Chart(jobDoughnutChart, {
                        type: 'doughnut',
                        data: {
                            labels: jobLabels,
                            datasets: [{
                                data: jobData,
                                hoverOffset: 4
                            }]
                        }
                    });

                    var jobTableHtml = '';
                    if (response.jobDemography != null) {
                        response.jobDemography.data.forEach((element, index) => {
                            jobTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.pekerjaan}</td>
                                <td>${element['laki-laki']} orang</td>
                                <td>${element.perempuan} orang</td>
                                <td>${element['laki-laki']+element.perempuan} orang</td>
                            </tr>`;
                        });
                    }
                    $('#job-table tbody').html(jobTableHtml);
                    new DataTable('#job-table');

                    // religionDemography
                    const religionLabels = response.religionDemography.data.map((item) => item.agama);
                    const religionData = response.religionDemography.data.map((item) => item[
                        'laki-laki'] + item[
                        'perempuan']);

                    $('#religionSpinner').remove();
                    const religionBarChart = document.getElementById('religionBarChart');
                    new Chart(religionBarChart, {
                        type: 'bar',
                        data: {
                            labels: religionLabels,
                            datasets: [{
                                label: 'Jumlah Pendudukan Berdasarkan Agama',
                                data: religionData,
                                borderWidth: 1,
                                borderRadius: 10,
                                // backgroundColor: '#758694',
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    const religionDoughnutChart = document.getElementById('religionDoughnutChart');
                    new Chart(religionDoughnutChart, {
                        type: 'doughnut',
                        data: {
                            labels: religionLabels,
                            datasets: [{
                                data: religionData,
                                hoverOffset: 4
                            }]
                        }
                    });

                    var religionTableHtml = '';
                    if (response.religionDemography != null) {
                        response.religionDemography.data.forEach((element, index) => {
                            religionTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.agama}</td>
                                <td>${element['laki-laki']} orang</td>
                                <td>${element.perempuan} orang</td>
                                <td>${element['laki-laki']+element.perempuan} orang</td>
                            </tr>`;
                        });
                    }
                    $('#religion-table tbody').html(religionTableHtml);
                    new DataTable('#religion-table');
                }
            });

            $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $.fn.dataTable.tables({
                    visible: true,
                    api: true
                }).columns.adjust();
            });
        });
    </script>
@endsection
