<?php 
    $namaKriteria=[];
    foreach ($data['kriteria'] as $key => $value) {
        $namaKriteria[] = $value['nama_ktr'];
    }
    $jmlKriteria = count($namaKriteria);

    if (!isset($_SESSION['user_id'])) {
        header('Location: '. BASEURL .'/middleware');
    } 
?>

<div class="container px-5 py-3 mb-5 bg-white shadow-sm border rounded">

    <div class="row my-3 px-5">
        <div class="col-12">
            <h3 class="text-secondary">>Edit Data</h3>
        </div>
    </div>

    <div class="px-5 py-3 rounded">
        <form action="<?= BASEURL; ?>/alternatif/update"  method="POST">
            <input type="hidden" name="id_alt" value="<?= $data['alt']['id_alt'] ?>" >
        
            <div class="row gy-5">

                <div class="col-12">
                    <label for="nama" class="form-label text-secondary">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['alt']['nama'] ?>" required>
                </div>

                <?php for ($i=1; $i <= $jmlKriteria; $i++) { ?>
                    <div class="col-12">
                        <label for="<?= "c$i" ?>" class="form-label text-secondary">
                            <span class="badge align-top bg-dark">
                                <?= "C$i"; ?>
                            </span>
                            <?= $namaKriteria[$i-1]; ?>
                        </label>
                        <select class="form-select" name="<?= "c$i"; ?>">
                            <?php foreach ($data["c$i"] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']["c$i"] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php } ?>

                <!--
                    <div class="col-12">
                        <label for="c1" class="form-label text-secondary">
                            Status Bangunan
                            <span class="badge align-top bg-dark">C1</span>
                        </label>
                        <select class="form-select" name="c1">
                            <?php foreach ($data['c1'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c1'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c2" class="form-label text-secondary">
                            Status Bangunan
                            <span class="badge align-top bg-dark">C2</span>
                        </label>
                        <select class="form-select" name="c2">
                            <?php foreach ($data['c2'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c2'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c3" class="form-label text-secondary">
                            Umur Kepala Keluarga
                            <span class="badge align-top bg-dark">C3</span>
                        </label>
                        <select class="form-select" name="c3">
                            <?php foreach ($data['c3'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c3'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c4" class="form-label text-secondary">
                            Pendidikan Kepala Keluarga
                            <span class="badge align-top bg-dark">C4</span>
                        </label>
                        <select class="form-select" name="c4">
                            <?php foreach ($data['c4'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c4'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c5" class="form-label text-secondary">
                            Jenis Lantai
                            <span class="badge align-top bg-dark">C5</span>
                        </label>
                        <select class="form-select" name="c5">
                            <?php foreach ($data['c5'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c5'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c6" class="form-label text-secondary">
                            Jenis Dinding
                            <span class="badge align-top bg-dark">C6</span>
                        </label>
                        <select class="form-select" name="c6">
                            <?php foreach ($data['c6'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c6'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c7" class="form-label text-secondary">
                            Jenis Atap
                            <span class="badge align-top bg-dark">C7</span>
                        </label>
                        <select class="form-select" name="c7">
                            <?php foreach ($data['c7'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c7'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c8" class="form-label text-secondary">
                            Sumber Air Minum
                            <span class="badge align-top bg-dark">C8</span>
                        </label>
                        <select class="form-select" name="c8">
                            <?php foreach ($data['c8'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c8'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c9" class="form-label text-secondary">
                            Sumber Penerangan
                            <span class="badge align-top bg-dark">C9</span>
                        </label>
                        <select class="form-select" name="c9">
                            <?php foreach ($data['c9'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub']; ?>" 
                                    <?= $key['id_sub'] == $data['alt']['c9'] ? 'selected' : '' ?> 
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c10" class="form-label text-secondary">
                            Bahan Bakar Memasak
                            <span class="badge align-top bg-dark">C10</span>
                        </label>
                        <select class="form-select" name="c10">
                            <?php foreach ($data['c10'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>"
                                    <?= $key['id_sub'] == $data['alt']['c10'] ? 'selected' : '' ?>
                                >
                                    <?= $key['nama_sub'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c11" class="form-label text-secondary">
                            Pekerjaan Kepala Keluarga
                            <span class="badge align-top bg-dark">C11</span>
                        </label>
                        <select class="form-select" name="c11">
                            <?php foreach ($data['c11'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>"
                                    <?= $key['id_sub'] == $data['alt']['c11'] ? 'selected' : '' ?>
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c12" class="form-label text-secondary">
                            Jumlah Aset
                            <span class="badge align-top bg-dark">C12</span>
                        </label>
                        <select class="form-select" name="c12">
                            <?php foreach ($data['c12'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>"
                                    <?= $key['id_sub'] == $data['alt']['c12'] ? 'selected' : '' ?>
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="c13" class="form-label text-secondary">
                            Jumlah Kamar
                            <span class="badge align-top bg-dark">C13</span>
                        </label>
                        <select class="form-select" name="c13">
                            <?php foreach ($data['c13'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>"
                                    <?= $key['id_sub'] == $data['alt']['c13'] ? 'selected' : '' ?>
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="col-12">
                        <label for="c14" class="form-label text-secondary">
                            Fasilitas Buang Air Besar
                            <span class="badge align-top bg-dark">C14</span>
                        </label>
                        <select class="form-select" name="c14">
                            <?php foreach ($data['c14'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>"
                                    <?= $key['id_sub'] == $data['alt']['c14'] ? 'selected' : '' ?>
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="col-12">
                        <label for="c15" class="form-label text-secondary">
                            Jenis Kloset
                            <span class="badge align-top bg-dark">C15</span>
                        </label>
                        <select class="form-select" name="c15">
                            <?php foreach ($data['c15'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>"
                                    <?= $key['id_sub'] == $data['alt']['c15'] ? 'selected' : '' ?>
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="col-12">
                        <label for="c16" class="form-label text-secondary">
                            Tempat Pembuangan Akhir Tinja
                            <span class="badge align-top bg-dark">C16</span>
                        </label>
                        <select class="form-select" name="c16">
                            <?php foreach ($data['c16'] as $key) : ?>
                                <option 
                                    value="<?= $key['id_sub'] ?>"
                                    <?= $key['id_sub'] == $data['alt']['c16'] ? 'selected' : '' ?>
                                >
                                    <?= $key['nama_sub']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div> 
                -->
                
            </div>
    
            <div class="row mt-5">
                <div class="col-12">
                    <a href="<?= BASEURL; ?>/alternatif" class="btn btn-outline-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>


</div>