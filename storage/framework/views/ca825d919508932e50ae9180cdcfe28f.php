<?php $__env->startSection('content'); ?>
    
    <main class="page bg-primary">
        <div class="hero bg-primary"
            style="background-size: cover; background-position: center; background-image: url('<?php echo e(Vite::asset('resources/images/hero_bg.png')); ?>')">
            <div class="overlay"></div>
            <div class="greetings">
                <div class="text-warning fw-bold fs-4"><b>Kewilayahan</b></div>
                <h1 class="display-6">Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya</h1>
                <p class="mb-0">Temukan data kewilayahan lengkap Kelurahan <?php echo e(env('WEB_NAME', '___')); ?> Surabaya!
                    Sarana & prasarana dan lain-lain, semua informasi disajikan secara jelas dan mudah
                    diakses. </p>
            </div>
        </div>
    </main>

    <section>
        <div class="container py-5">
            <div class="section_div text-center d-flex align-items-center justify-content-center flex-column mb-5">
                <div class="section_divider bg-warning mb-2"></div>
                <h2 class="display-6">Data Kewilayahan Kelurahan</h2>
                <p>Temukan data kewilayahan Kelurahan kami yang menyajikan informasi lengkap tentang sarana dan prasarana
                    dalam bentuk tabel dan peta interaktif.</p>
            </div>
            <ul class="nav nav-pills justify-content-center" id="regionTab">
                <li class="nav-item">
                    <button class="nav-link rounded-5 active py-3 px-4" id="region-map-tab" data-bs-toggle="tab"
                        data-bs-target="#region-map-tab-pane" type="button" role="tab">Peta Interaktif</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link rounded-5 py-3 px-4" id="region-table-tab" data-bs-toggle="tab"
                        data-bs-target="#region-table-tab-pane" type="button" role="tab">Data Tabel Lengkap</button>
                </li>
            </ul>
            <div class="tab-content" id="regionTabContent">
                <div class="tab-pane fade show active" id="region-map-tab-pane">
                    <div id="map" class="border rounded-4 mt-3" style="height: 600px; position: relative;">
                        <div id="checkbox-container" class="fs-6"
                            style="position: absolute; top: 10px; right: 10px; z-index: 1000; background: rgba(255, 255, 255, 0.8); padding: 5px; border-radius: 4px;">
                            <input type="checkbox" id="formal" checked> <label for="formal">Pendidikan
                                formal</label><br>
                            <input type="checkbox" id="industri"> <label for="industri">Industri dan
                                perdagangan</label><br>
                            <input type="checkbox" id="keagamaan"> <label for="keagamaan">Keagamaan</label><br>
                            <input type="checkbox" id="kebudayaan"> <label for="kebudayaan">Kebudayaan</label><br>
                            <input type="checkbox" id="kesehatan"> <label for="kesehatan">Kesehatan</label><br>
                            <input type="checkbox" id="komunikasi"> <label for="komunikasi">Komunikasi</label><br>
                            <input type="checkbox" id="nonFormal"> <label for="nonFormal">Pendidikan non
                                formal</label><br>
                            <input type="checkbox" id="olahraga"> <label for="olahraga">Olahraga</label><br>
                            <input type="checkbox" id="pantiSosial"> <label for="pantiSosial">Panti
                                Sosial</label><br>
                            <input type="checkbox" id="pariwisata"> <label for="pariwisata">Pariwisata</label><br>
                            <input type="checkbox" id="perhubungan"> <label for="perhubungan">Perhubungan</label>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="region-table-tab-pane">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3 rounded-4 p-4 mt-3 bg-body-secondary">
                                <div class="list-group list-group-flush rounded-3" id="regionTableTab">
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between active"
                                        id="region-table-1-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-1-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Panti Sosial
                                            <span id="pantiAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-2-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-2-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Komunikasi
                                            <span id="komunikasiAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-3-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-3-tab-pane">
                                        <div class="d-flex align-items-center">Prasarana Perhubungan
                                            <span id="perhubunganAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-4-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-4-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Kesehatan
                                            <span id="kesehatanAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-5-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-5-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Industri dan Perdagangan
                                            <span id="industriAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-6-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-6-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Olahraga
                                            <span id="olahragaAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-7-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-7-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Keagamaan
                                            <span id="keagamaanAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-8-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-8-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Kebudayaan
                                            <span id="kebudayaanAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-9-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-9-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Pendidikan Non Formal
                                            <span id="nonFormalAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-10-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-10-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Pariwisata
                                            <span id="pariwisataAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between"
                                        id="region-table-11-tab" data-bs-toggle="tab"
                                        data-bs-target="#region-table-11-tab-pane">
                                        <div class="d-flex align-items-center">Sarana Pendidikan Formal
                                            <span id="formalAmount" class="d-flex">
                                                <span class="spinner-grow spinner-grow-sm text-secondary ms-2"
                                                    role="status">
                                                    <span class="visually-hidden">Tunggu...</span>
                                                </span>
                                            </span>
                                        </div>
                                        <i class="bi bi-chevron-right me-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="mb-5 border rounded-4 p-4 mt-3">
                                <div class="tab-content" id="regionTableTabContent">
                                    <div class="tab-pane fade show active" id="region-table-1-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Panti Sosial
                                        </h3>
                                        <hr>
                                        <table id="panti-sosial-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-2-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Komunikasi
                                        </h3>
                                        <hr>
                                        <table id="komunikasi-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-3-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Prasarana Perhubungan
                                        </h3>
                                        <hr>
                                        <table id="perhubungan-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-4-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Kesehatan
                                        </h3>
                                        <hr>
                                        <table id="kesehatan-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-5-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Industri dan
                                            Perdagangan
                                        </h3>
                                        <hr>
                                        <table id="industri-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-6-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Olahraga
                                        </h3>
                                        <hr>
                                        <table id="olahraga-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-7-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Keagamaan
                                        </h3>
                                        <hr>
                                        <table id="keagamaan-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-8-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Kebudayaan
                                        </h3>
                                        <hr>
                                        <table id="kebudayaan-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-9-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Pendidikan Non
                                            Formal
                                        </h3>
                                        <hr>
                                        <table id="non-formal-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th></th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-10-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Pariwisata
                                        </h3>
                                        <hr>
                                        <table id="pariwisata-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show" id="region-table-11-tab-pane">
                                        <h3 class="fs-5"><i class="bi bi-chevron-right me-2"></i>Sarana Pendidikan
                                            Formal
                                        </h3>
                                        <hr>
                                        <table id="formal-table" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Alamat</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
                                                            <span class="visually-hidden">Tunggu...</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="spinner-grow spinner-grow-sm text-secondary"
                                                            role="status">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="my-5">&nbsp;</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.awesome-markers/2.0.0/css/leaflet.awesome-markers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_script'); ?>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.awesome-markers/2.0.0/leaflet.awesome-markers.min.js">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "/kewilayahan/getApiData",
                success: function(response) {
                    var pantiAmount = response.pantiSosial.data != null ? response.pantiSosial.data
                        .length : 0;
                    var komunikasiAmount = response.komunikasi.data != null ? response.komunikasi.data
                        .length : 0;
                    var perhubunganAmount = response.perhubungan.data != null ? response.perhubungan
                        .data.length : 0;
                    var kesehatanAmount = response.kesehatan.data != null ? response.kesehatan.data
                        .length : 0;
                    var industriAmount = response.industri.data != null ? response.industri.data
                        .length : 0;
                    var olahragaAmount = response.olahraga.data != null ? response.olahraga.data
                        .length : 0;
                    var keagamaanAmount = response.keagamaan.data != null ? response.keagamaan.data
                        .length : 0;
                    var kebudayaanAmount = response.kebudayaan.data != null ? response.kebudayaan.data
                        .length : 0;
                    var nonFormalAmount = response.nonFormal.data != null ? response.nonFormal.data
                        .length : 0;
                    var pariwisataAmount = response.pariwisata.data != null ? response.pariwisata.data
                        .length : 0;
                    var formalAmount = response.formal.data != null ? response.formal.data.length : 0;

                    $('#pantiAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${pantiAmount}</span>`);
                    $('#komunikasiAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${komunikasiAmount}</span>`
                    );
                    $('#perhubunganAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${perhubunganAmount}</span>`
                    );
                    $('#kesehatanAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${kesehatanAmount}</span>`
                    );
                    $('#industriAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${industriAmount}</span>`
                    );
                    $('#olahragaAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${olahragaAmount}</span>`
                    );
                    $('#keagamaanAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${keagamaanAmount}</span>`
                    );
                    $('#kebudayaanAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${kebudayaanAmount}</span>`
                    );
                    $('#nonFormalAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${nonFormalAmount}</span>`
                    );
                    $('#pariwisataAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${pariwisataAmount}</span>`
                    );
                    $('#formalAmount').html(
                        `<span class="badge rounded-pill text-bg-light ms-2">${formalAmount}</span>`
                    );

                    // Panti Sosial
                    var pantiSosialTableHtml = '';
                    if (response.pantiSosial != null) {
                        response.pantiSosial.data.forEach((element, index) => {
                            pantiSosialTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#panti-sosial-table tbody').html(pantiSosialTableHtml);
                    new DataTable('#panti-sosial-table');

                    // Komunikasi
                    var komunikasiTableHtml = '';
                    if (response.komunikasi != null) {
                        response.komunikasi.data.forEach((element, index) => {
                            komunikasiTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#komunikasi-table tbody').html(komunikasiTableHtml);
                    new DataTable('#komunikasi-table');

                    // Perhubungan
                    var perhubunganTableHtml = '';
                    if (response.perhubungan != null) {
                        response.perhubungan.data.forEach((element, index) => {
                            perhubunganTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#perhubungan-table tbody').html(perhubunganTableHtml);
                    new DataTable('#perhubungan-table');

                    // Kesehatan
                    var kesehatanTableHtml = '';
                    if (response.kesehatan != null) {
                        response.kesehatan.data.forEach((element, index) => {
                            kesehatanTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#kesehatan-table tbody').html(kesehatanTableHtml);
                    new DataTable('#kesehatan-table');

                    // Industri
                    var industriTableHtml = '';
                    if (response.industri != null) {
                        response.industri.data.forEach((element, index) => {
                            industriTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#industri-table tbody').html(industriTableHtml);
                    new DataTable('#industri-table');

                    // Olahraga
                    var olahragaTableHtml = '';
                    if (response.olahraga != null) {
                        response.olahraga.data.forEach((element, index) => {
                            olahragaTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#olahraga-table tbody').html(olahragaTableHtml);
                    new DataTable('#olahraga-table');

                    // Keagamaan
                    var keagamaanTableHtml = '';
                    if (response.keagamaan != null) {
                        response.keagamaan.data.forEach((element, index) => {
                            keagamaanTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#keagamaan-table tbody').html(keagamaanTableHtml);
                    new DataTable('#keagamaan-table');

                    // Kebudayaan
                    var kebudayaanTableHtml = '';
                    if (response.kebudayaan != null) {
                        response.kebudayaan.data.forEach((element, index) => {
                            kebudayaanTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#kebudayaan-table tbody').html(kebudayaanTableHtml);
                    new DataTable('#kebudayaan-table');

                    // Non Formal
                    var nonFormalTableHtml = '';
                    if (response.nonFormal != null) {
                        response.nonFormal.data.forEach((element, index) => {
                            nonFormalTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#non-formal-table tbody').html(nonFormalTableHtml);
                    new DataTable('#non-formal-table');

                    // Pariwisata
                    var pariwisataTableHtml = '';
                    if (response.pariwisata != null) {
                        response.pariwisata.data.forEach((element, index) => {
                            pariwisataTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#pariwisata-table tbody').html(pariwisataTableHtml);
                    new DataTable('#pariwisata-table');

                    // Formal
                    var formalTableHtml = '';
                    if (response.formal != null) {
                        response.formal.data.forEach((element, index) => {
                            formalTableHtml += `
                            <tr>
                                <td width="10">${index+1}.</td>
                                <td>${element.nama}</td>
                                <td>${element.kategori}</td>
                                <td>${element.alamat}</td>
                                <td></td>
                            </tr>`;
                        });
                    }
                    $('#formal-table tbody').html(formalTableHtml);
                    new DataTable('#formal-table');
                }
            });

            $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $.fn.dataTable.tables({
                    visible: true,
                    api: true
                }).columns.adjust();
            });

            let map;
            let mapInitialized = false;
            let mapData;

            function initMap(data) {
                if (mapInitialized || !mapData) return;
                const mapContainer = document.getElementById('map');
                const map = L.map(mapContainer).setView([-7.331029, 112.722475], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                }).addTo(map);

                const categoryIcons = {
                    'formal': 'graduation-cap',
                    'industri': 'industry',
                    'keagamaan': 'church',
                    'kebudayaan': 'paint-brush',
                    'kesehatan': 'hospital',
                    'komunikasi': 'phone',
                    'nonFormal': 'book',
                    'olahraga': 'volleyball',
                    'pantiSosial': 'home',
                    'pariwisata': 'camera',
                    'perhubungan': 'bus'
                };

                const categoryColors = {
                    'formal': 'red',
                    'industri': 'green',
                    'keagamaan': 'blue',
                    'kebudayaan': 'yellow',
                    'kesehatan': 'purple',
                    'komunikasi': 'cyan',
                    'nonFormal': 'pink',
                    'olahraga': 'black',
                    'pantiSosial': 'purple',
                    'pariwisata': 'orange',
                    'perhubungan': 'silver'
                };

                const markers = {};

                Object.keys(data).forEach(category => {
                    const categoryData = data[category].data;
                    markers[category] = [];

                    categoryData.forEach(item => {
                        const lat = parseFloat(item.latitude);
                        const lng = parseFloat(item.longitude);

                        if (!isNaN(lat) && !isNaN(lng)) {
                            const icon = L.AwesomeMarkers.icon({
                                icon: categoryIcons[category],
                                markerColor: categoryColors[category],
                                prefix: 'fa'
                            });

                            const marker = L.marker([lat, lng], {
                                    icon: icon
                                })
                                .bindPopup(item.nama);

                            markers[category].push(marker);

                            const checkbox = document.getElementById(category);
                            if (checkbox && checkbox.checked) {
                                marker.addTo(map);
                            }
                        } else {
                            console.log('Invalid Lat/Lng:', lat, lng);
                        }
                    });
                });

                Object.keys(categoryColors).forEach(category => {
                    const checkbox = document.getElementById(category);
                    if (checkbox) {
                        checkbox.addEventListener('change', function() {
                            toggleMarkers(category, this.checked, markers, map);
                        });

                        if (category === 'formal') {
                            checkbox.checked = true;
                        } else {
                            checkbox.checked = false;
                        }
                    } else {
                        console.error(`Checkbox with ID ${category} not found`);
                    }
                });
            }

            function toggleMarkers(category, show, markers, map) {
                if (markers[category]) {
                    markers[category].forEach(marker => {
                        if (show) {
                            if (!map.hasLayer(marker)) {
                                marker.addTo(map);
                            }
                        } else {
                            if (map.hasLayer(marker)) {
                                marker.remove();
                            }
                        }
                    });
                }
            }

            const regionMapTab = document.getElementById('region-map-tab');
            $.ajax({
                url: "/kewilayahan/getApiData",
                success: function(response) {
                    mapData = response;
                    initMap(response);
                }
            });
            // regionMapTab.addEventListener('shown.bs.tab', function() {
            //     $.ajax({
            //         url: "/kewilayahan/getApiData",
            //         success: function(response) {
            //             mapData = response;
            //             initMap(response);
            //         }
            //     });
            // });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Desa Cantik Fix\cantik-public-tus\resources\views/region.blade.php ENDPATH**/ ?>