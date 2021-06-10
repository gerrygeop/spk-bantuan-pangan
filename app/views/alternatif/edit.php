<?php if (!isset($_SESSION['user_id'])) {
    header('Location: '. BASEURL .'/middleware');
} ?>

<div class="container shadow border rounded px-5 py-3 mb-5">

    <div class="row my-3">
        <div class="col-12">
            <h3 class="text-secondary"><?= '#' . $data['judul']; ?></h3>
        </div>
    </div>

    <div class="py-4 px-3 rounded">
        <form action="<?= BASEURL; ?>/alternatif/update"  method="POST">

            <input type="hidden" name="id_alt" value="<?= $data['alt']['id_alt'] ?>" >
        
            <div class="row g-4">

                <div class="col-12">
                    <label for="nama" class="form-label text-secondary">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['alt']['nama'] ?>" required>
                </div>

                <hr>
    
                <div class="col-12">
                    <label for="c1" class="form-label text-secondary">Jumlah Anggota Keluarga [C1]</label>
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

                <hr>
    
                <div class="col-12">
                    <label for="c2" class="form-label text-secondary">Status Bangunan [C2]</label>
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

                <hr>
    
                <div class="col-12">
                    <label for="c3" class="form-label text-secondary">Umur Kepala Keluarga [C3]</label>
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

                <hr>
    
                <div class="col-12">
                    <label for="c4" class="form-label text-secondary">Pendidikan Kepala Keluarga [C4]</label>
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

                <hr>
                
                <div class="col-12">
                    <label for="c5" class="form-label text-secondary">Jenis Lantai [C5]</label>
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

                <hr>
    
                <div class="col-12">
                    <label for="c6" class="form-label text-secondary">Jenis Dinding [C6]</label>
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

                <hr>
    
                <div class="col-12">
                    <label for="c7" class="form-label text-secondary">Jenis Atap [C7]</label>
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

                <hr>
                
                <div class="col-12">
                    <label for="c8" class="form-label text-secondary">Sumber Air Minum [C8]</label>
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

                <hr>
    
                <div class="col-12">
                    <label for="c9" class="form-label text-secondary">Sumber Penerangan [C9]</label>
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

                <hr>
                
                <div class="col-12">
                    <label for="c10" class="form-label text-secondary">Bahan Bakar Memasak [C10]</label>
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

                <hr>
    
                <div class="col-12">
                    <label for="c11" class="form-label text-secondary">Pekerjaan Kepala Keluarga [C11]</label>
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

                <hr>

                <div class="col-12">
                    <label for="c12" class="form-label text-secondary">Jumlah Aset [C12]</label>
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
                
                <hr>

            </div>
    
            <div class="row mt-5">
                <div class="col-12">
                    <a href="<?= BASEURL; ?>/alternatif" class="btn btn-outline-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>


</div>