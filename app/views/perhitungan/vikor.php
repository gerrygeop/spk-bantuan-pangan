<?php $jmlAlternatif = count($data['vk']['users']); ?>

<div class="container-fluid" id="perhitungan-vikor">

    <nav aria-label="breadcrumb" class="ms-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=BASEURL;?>/perhitungan">Perhitungan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail VIKOR</li>
        </ol>
    </nav>

    <div class="shadow px-4 py-3 rounded border mb-5">

        <div class="d-flex justify-content-between align-items-center">
            <h4 class="text-secondary">
                #Normalisasi Matriks
            </h4>
            <a class="btn btn-outline-primary btn-sm" href="#kali-bobot">
                Normalisasi x bobot &darr;
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
                                <?= substr($data['vk']["N1-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N2-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N3-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N4-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N5-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N6-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N7-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N8-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N9-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N10-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N11-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["N12-$i"], 0, 6); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="#kali-bobot">
            Normalisasi x bobot
        </a>
    </div>

    <div class="shadow px-4 py-3 rounded border mb-5" id="kali-bobot">

        <div class="d-flex justify-content-between align-items-center">
            <h4 class="text-secondary">
                #Normalisasi x Bobot
            </h4>
            <a class="btn btn-outline-primary btn-sm" href="#nilai-sr">
                Nilai S dan R
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
                                <?= substr($data['vk']["A1-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A2-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A3-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A4-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A5-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A6-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A7-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A8-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A9-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A10-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A11-$i"], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['vk']["A12-$i"], 0, 6); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="#nilai-sr">
            Nilai S dan R
        </a>
    </div>

    <div class="shadow px-4 py-3 rounded border mb-5" id="nilai-sr">

        <div class="d-flex align-items-center justify-content-between">
            <h4 class="text-secondary">
                #Nilai S dan R
            </h4>
            <a class="btn btn-outline-primary btn-sm" href="#ranking-vk">
                Lihat Ranking &darr;
            </a>
        </div>

        <div class="row gap-5">
            <div class="col-sm-12 col-md-3 my-3 border border-1 rounded table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>Alt</th>
                            <th>Nilai S</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data['vk']['S'] as $s) { ?>
                            <tr class="text-center">
                                <th><?= 'A' . $i; ?></th>
                                <td>
                                    <?=  substr($s, 0, 8); ?>
                                </td>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-sm-12 col-md-3 my-3 border border-1 rounded table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>Alt</th>
                            <th>Nilai R</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($data['vk']['R'] as $r) { ?>
                            <tr class="text-center">
                                <th><?= 'A' . $i; ?></th>
                                <td>
                                    <?=  substr($r, 0, 8); ?>
                                </td>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 col-md-3 my-3 table-responsive">
                <table class="table align-middle border border-1 rounded">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Nilai S</th>
                            <th>Nilai R</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th>Max</th>
                            <td>
                                <?= substr(max($data['vk']['S']), 0, 8); ?>
                            </td>
                            <td>
                                <?= substr(max($data['vk']['R']), 0, 8); ?>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th>Min</th>
                            <td>
                                <?= substr(min($data['vk']['S']), 0, 8); ?>
                            </td>
                            <td>
                                <?= substr(min($data['vk']['R']), 0, 8); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <a class="btn btn-primary" href="#ranking-vk">
            Lihat Ranking
        </a>
    </div>

    <div class="shadow px-4 py-3 rounded border mb-5" id="ranking-vk">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="text-secondary">
                #Ranking VIKOR
            </h4>
            <a class="btn btn-primary" href="#perhitungan-vikor">
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
                    <?php foreach ($data["vk"]["Q"] as $key => $value) { ?>
                        <tr class="text-center">
                            <th>
                                <?= 'A' . $key; ?>
                            </th>
                            <td>
                                <?php foreach ($data['vk']['users'] as $id => $alt) {
                                    if ($id == $key) {
                                        echo $alt;
                                    }
                                } ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($value, 0, 10); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="#perhitungan-vikor">
            Kembali &uarr;
        </a>
    </div>

</div>