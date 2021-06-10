<div class="container">
    <div class="my-5 py-4 px-4 mb-5 rounded shadow">
        <h2 class="mb-4"><?= '#' . $data['judul']; ?></h2>
        <div class="mb-3">
            <p class="text-secondary text-sm">
                **Pengguna hanya dapat melihat halaman Home dan halaman kriteria
            </p>
            <hr>
            <p class="text-secondary text-sm">
                **Pada halaman Home, pengguna dapat melihat penjelasan ringkas mengenai Program Keluarga Harapan
            </p>
            <hr>
            <p class="text-secondary text-sm">
                **Pada halaman kriteria, pengguna dapat melihat tabel yang menampilkan nilai kriteria dari tiap data calon penerima BPNT
            </p>
            <hr>
            <p class="text-secondary text-sm">
                **Pada halaman kriteria pengguna juga dapat melihat hasil perbandingan & proses perhitungan metode WASPAS dan VIKOR
            </p>
        </div>
    </div>

    <div class="my-5 py-4 px-3 rounded shadow">
        <h2 class="mb-3">Keterangan kriteria</h2>
        <hr>
        <div class="row row-cols-1 row-cols-md-3">

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C1</span> Jumlah Anggota Keluarga
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C1</b> adalah Jumlah Anggota Keluarga, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c1'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C2</span> Status Bangunan
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C2</b> adalah Status Bangunan, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c2'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C3</span> Umur Kepala Keluarga
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C3</b> adalah Umur Kepala Keluarga, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c3'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C4</span> Pendidikan Kepala Keluarga
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C4</b> adalah Pendidikan Kepala Keluarga, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c4'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C5</span> Jenis Lantai
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C5</b> adalah Jenis Lantai, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c5'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C6</span> Jenis Dinding
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C6</b> adalah Jenis Dinding, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c6'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C7</span> Jenis Atap
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C7</b> adalah Jenis Atap, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c7'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C8</span> Sumber Air Minum
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C8</b> adalah Sumber Air Minum, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c8'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C9</span> Sumber Penerangan
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C9</b> adalah Sumber Penerangan, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c9'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C10</span> Bahan Bakar Memasak
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C10</b> adalah Bahan Bakar Memasak, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c10'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C11</span> Pekerjaan Kepala Keluarga
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C11</b> adalah Aset Kepemilikan, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c11'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card">
                    <div class="card-header w-full fw-bold fs-5 bg-primary text-white">
                        <span class="badge bg-warning">C12</span> Jumlah Aset
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <b>C12</b> adalah Jumlah Aset, dengan subkriteria:
                        </p>
                    </div>
                    <ul class="list-group list-group-flush fw-bold">
                        <?php foreach ($data['c12'] as $item) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $item['nama_sub']; ?>
                                <span class="badge bg-primary rounded-pill fw-light">bobot: <?= $item['bobot_sub'] ;?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
