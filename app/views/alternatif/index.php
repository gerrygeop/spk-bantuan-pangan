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

        <div class="row">
            <div class="col-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-6 mb-3">
                <h2 class="text-secondary">Data calon penerima BPNT</h2>
                <small class="text-sm fst-italic text-secondary">*Tabel ini menampilkan data calon penerima BPNT</small>
            </div>
            
            <div class="col-12 col-md-6 text-md-end">
                <a href="<?= BASEURL; ?>/alternatif/create" class="btn btn-warning my-3 me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Tambah Data
                </a>
            </div>
        </div>

        <div class="p-2 bg-white border border-1 rounded table-responsive">
            <table class="table table-hover table-sm align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <?php $i=1; foreach ($data['ktr'] as $ktr) { ?>
                            <th>
                                <button
                                    type="button"
                                    class="btn btn-white btn-sm ps-0 fw-bold"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="<?= $ktr['nama_ktr']; ?>"
                                    >
                                    <?= "C$i"; ?>
                                </button>
                            </th>
                        <?php $i++; } ?>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; foreach ($data['alt'] as $alt) : ?>
                        <tr>
                            <th><?= $i; ?></th>
                            <td class="col-1">
                                <?= $alt['nama']; ?>
                            </td>

                            <?php for ($c=1; $c <= $data['jmlKriteria']; $c++) { ?>
                                <td class="cut-text py-3">
                                    <?php foreach ($data['sub'] as $sub) {
                                        $alt["c$c"] == $sub['id_sub'] ?  print_r($sub['nama_sub']) : 'null';
                                    } ?>
                                </td>
                            <?php } ?>

                            <td class="text-center">
                                <a
                                    href="<?= BASEURL; ?>/alternatif/edit/<?= $alt['id_alt']; ?>"
                                    class="btn btn-primary btn-sm pt-0"
                                    title="Edit"
                                >
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="<?= BASEURL; ?>/alternatif/delete/<?= $alt['id_alt']; ?>" method="POST" class="">
                                    <button
                                        class="btn btn-danger btn-sm pt-0"
                                        onclick="return confirm('Yakin?');"
                                    >
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>