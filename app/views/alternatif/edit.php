<?php
    if (!isset($_SESSION['user_id'])) {
        header('Location: '. BASEURL .'/middleware');
        exit;
    }
    if ($_SESSION['user_role'] != 'superadmin') {
        header('Location: '. BASEURL .'/middleware/checkout');
        exit;
    }
    $namaKriteria=[];
    foreach ($data['kriteria'] as $key => $value) {
        $namaKriteria[] = $value['nama_ktr'];
    }
    $jmlKriteria = count($namaKriteria);
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