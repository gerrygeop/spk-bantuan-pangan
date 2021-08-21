<?php 
    if (!isset($_SESSION['user_id'])) {
        header('Location: '. BASEURL .'/middleware');
        exit;
    }
    if ($_SESSION['user_role'] != 'superadmin') {
        header('Location: '. BASEURL .'/middleware/checkout');
        exit;
    }
?>

<div>
    <div class="p-3 mb-5">

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=BASEURL;?>/perhitungan">Perhitungan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Matrik Keputusan</li>
            </ol>
        </nav>

        <div class="row mb-4">
            <div class="col">
                <h3 class="text-secondary mb-1">Matrik Keputusan</h3>
                <small class="text-sm fst-italic text-secondary">*Tabel ini menampilkan nilai kriteria pada setiap data calon penerima BPNT.</small>
            </div>
        </div>
        
        <div class="p-2 bg-white border border-1 rounded table-responsive">
            <table class="table table-hover table-sm align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <?php $i=1; foreach ($data['ktr'] as $ktr) { ?>
                            <th scope="col">
                                <button
                                    type="button"
                                    class="btn btn-white btn-sm w-100 fw-bold"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="<?= $ktr['nama_ktr']; ?>"
                                    >
                                    <?= "C$i"; ?>
                                </button>
                            </th>
                        <?php $i++; } ?>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; foreach ($data['alt'] as $alt) : ?>
                        <tr>
                            <th class="py-2"><?= "A$i"; ?></th>
                            <td><?= $alt['nama']; ?></td>

                            <?php for ($c=1; $c <= $data['jmlKriteria']; $c++) { ?>
                                <td class="text-center">
                                    <?php foreach ($data['sub'] as $sub) { 
                                        if ($alt["c$c"] == $sub['id_sub']) {
                                            echo $sub['bobot_sub'];
                                        }
                                    } ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>