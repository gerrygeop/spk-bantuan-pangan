<?php $jmlAlternatif = count($data['alt']); ?>

<div class="container-fluid" id="perhitungan-vikor">

    <nav aria-label="breadcrumb" class="ms-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=BASEURL;?>/perhitungan">Perhitungan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail VIKOR</li>
        </ol>
    </nav>

    <div class="shadow px-4 py-3 rounded border mb-5">
        <h4 class="text-secondary">
            #Normalisasi Matriks
        </h4>
        
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
            Normalisasi Matriks dikalikan dengan bobot
        </a>
    </div>

    <div class="shadow px-4 py-3 rounded border mb-5" id="kali-bobot">
        <h4 class="text-secondary">
            #Normalisasi x Bobot
        </h4>
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
        <h4 class="text-secondary">
            #Nilai S dan R
        </h4>

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
                                <?=  substr(max($data['vk']['S']), 0, 8); ?>
                            </td>
                            <td>
                                <?= substr(max($data['vk']['R']), 0, 8); ?>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th>Min</th>
                            <td>
                                <?=  substr(min($data['vk']['S']), 0, 8); ?>
                            </td>
                            <td>
                                <?= substr(min($data['vk']['R']), 0, 8); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <a class="btn btn-primary" data-bs-toggle="collapse" href="#ranking-vk">
            Lihat Ranking
        </a>
    </div>

<!-- 
    <div class="collapse shadow px-4 py-3 rounded border mb-5" id="ranking-wp">
        <h4 class="text-secondary">
            #Ranking Metode WP
        </h4>
        <div class="col-sm col-lg-6 py-2 px-4 my-3 border border-1 rounded">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Alt</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $jumlahAlt = count($data['vk']['rankVk']);
                        $lolos = 50 * $jumlahAlt / 100;
                        
                        $i=1;
                        foreach($data['vk']['rankVk'] as $key => $value) { 
                    ?>
                        <tr>
                            <th>
                                <?= 'A'.$key; ?>
                            </th>
                            <td>
                                <?php foreach ($data['vk']['users'] as $n => $alt) {
                                    if ($n == $key) {
                                        echo $alt;
                                    }
                                } ?>
                            </td>
                            <td>
                                <?= substr($value, 0, 6); ?>
                            </td>
                            <td class="text-center">
                                <?php if($i <= $lolos) {
                                    echo '<span class="badge bg-success">Diterima</span>';
                                    $i++;
                                } else {
                                    echo '<span class="badge bg-danger">Tidak diterima</span>';
                                } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
 -->

</div>