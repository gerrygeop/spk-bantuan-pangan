<?php $jmlAlternatif = count($data['wp']['users']); ?>

<div class="container-fluid" id="perhitungan-waspas">

    <nav aria-label="breadcrumb" class="ms-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=BASEURL;?>/perhitungan">Perhitungan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Topsis</li>
        </ol>
    </nav>

    <div class="shadow px-4 py-3 rounded border mb-5">
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="text-secondary">
                #Normalisasi Matriks
            </h4>
            <a class="btn btn-outline-primary btn-sm" href="#bobot-preferensi">
                Nilai Bobot Preferensi (Qi) &darr;
            </a>
        </div>

        <div class="py-2 px-3 my-3 border border-1 rounded table-responsive">
            <table class="table table-sm align-middle">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Alt</th>
                        <?php for ($i=1; $i <= 12; $i++) { ?>
                            <th scope="col">
                                <?= 'C' . $i; ?>
                            </th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 1; $i <= $jmlAlternatif; $i++) { ?>
                        <tr class="text-center">
                            <th scope="row">
                                <?= 'A' . $i; ?>
                            </th>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A1-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A2-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A3-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A4-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A5-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A6-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A7-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A8-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A9-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A10-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A11-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']["A12-$i"], 0, 6); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="#bobot-preferensi">
            Nilai Bobot Preferensi (Qi)
        </a>
    </div>

    <div class="shadow px-4 py-3 rounded border mb-5" id="bobot-preferensi">
        <div class="col d-flex align-items-center justify-content-between">
            <h4 class="text-secondary">
                #Nilai Bobot Preferensi (Qi)
            </h4>
            <a class="btn btn-outline-primary btn-sm" href="#hasil-perhitungan">
                Lihat Ranking &darr;
            </a>
        </div>
        <div class="row gap-5">
            <div class="col-sm-12 col-md-3 my-3 border border-1 rounded table-responsive">
                <table class="table table-sm caption-top align-middle">
                    <caption>Bobot Prefrensi (Qi) Tahap 1</caption>
                    <thead>
                        <tr class="text-center">
                            <th>Alt</th>
                            <th>Qi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 1; $i <= $jmlAlternatif; $i++) { ?>
                            <tr class="text-center">
                                <th><?= 'A' . $i; ?></th>
                                <td class="py-2 px-3">
                                    <?= substr($data['wp']["QP1-$i"], 0, 8); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 col-md-3 my-3 border border-1 rounded table-responsive">
                <table class="table table-sm caption-top align-middle">
                    <caption>Bobot Prefrensi (Qi) Tahap 2</caption>
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Alt</th>
                            <th scope="col">Qi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 1; $i <= $jmlAlternatif; $i++) { ?>
                            <tr class="text-center">
                                <th scope="row">
                                    <?= 'A' . $i; ?>
                                </th>
                                <td class="py-2 px-3">
                                    <?= substr($data['wp']["QP2-$i"], 0, 8); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-sm-12 col-md-3 my-3 border border-1 rounded table-responsive">
                <table class="table table-sm caption-top align-middle">
                    <caption>Hasil Perhitungan</caption>
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Alt</th>
                            <th scope="col">Qi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 1; $i <= $jmlAlternatif; $i++) { ?>
                            <tr class="text-center">
                                <th scope="row">
                                    <?= 'A' . $i; ?>
                                </th>
                                <td class="py-2 px-3">
                                    <?= substr($data['wp']["QP3-$i"], 0, 10); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <a class="btn btn-primary" href="#hasil-perhitungan">
            Ranking
        </a>
    </div>

    <div class="shadow px-4 py-3 rounded border mb-5" id="hasil-perhitungan">

        <div class="d-flex justify-content-between align-items-center">
            <h4 class="text-secondary">
                #Ranking WASPAS
            </h4>
            <a class="btn btn-outline-primary btn-sm" href="#perhitungan-waspas">
                Kembali &uarr;
            </a>
        </div>

        <div class="col-sm col-lg-6 py-2 px-4 my-3 border border-1 rounded table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr class="text-center">
                        <th class="col-2">Alt</th>
                        <th class="col-4">Nama</th>
                        <th class="col-4">Qi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i=1;
                        foreach ($data["wp"]["rankWp"] as $key => $value) {
                    ?>
                        <tr class="text-center">
                            <th>
                                <?= "A$key" ?>
                            </th>
                            <td>
                                <?= $value[1] ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($value[0], 0, 8); ?>
                            </td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="#perhitungan-waspas">
            Kembali &uarr;
        </a>
    </div>

</div>