<?php
    $jumlahAlt = count($data['wp']['rankWp']);
?>

<div class="container-fluid">

    <nav aria-label="breadcrumb" class="ms-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=BASEURL;?>/perhitungan">Perhitungan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Topsis</li>
        </ol>
    </nav>

    <div class="shadow px-4 py-3 rounded border mb-5">
        <h4 class="text-secondary">
            #Menentukan matriks keputusan ternormalisasi
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
                    <?php for($i = 1; $i <= $jumlahAlt; $i++) { ?>
                        <tr class="text-center">
                            <th scope="row">
                                <?= 'A' . $i; ?>
                            </th>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R1-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R2-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R3-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R4-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R5-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R6-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R7-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R8-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R9-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R10-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R11-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['X']['R12-'.$i], 0, 6); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#matrix-bobot">
            Menghitung Nilai Alternatif (Qi)
        </a>
    </div>

    <div class="collapse shadow px-4 py-3 rounded border mb-5" id="matrix-bobot">
        <h4 class="text-secondary">
            #Menghitung Nilai Alternatif (Qi)
        </h4>
        <div class="py-2 px-3 my-3 border border-1 rounded table-responsive">
            <table class="table table-sm align-middle">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Alt</th>
                        <?php for ($i=1; $i <= 11; $i++) { ?>
                            <th scope="col">
                                <?= 'C' . $i; ?>
                            </th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 1; $i <= $jumlahAlt; $i++) { ?>
                        <tr class="text-center">
                            <th scope="row">
                                <?= 'A' . $i; ?>
                            </th>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V1-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V2-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V3-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V4-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V5-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V6-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V7-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V8-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V9-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V10-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V11-'.$i], 0, 6); ?>
                            </td>
                            <td class="py-2 px-3">
                                <?= substr($data['wp']['V']['V12-'.$i], 0, 6); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#solusi-ideal">
            Solusi ideal positif dan negatif
        </a>
    </div>

    <div class="collapse shadow px-4 py-3 rounded border mb-5" id="solusi-ideal">
        <h4 class="text-secondary">
            #Solusi ideal positif dan negatif
        </h4>
            <div class="col-sm col-lg-6 py-2 px-4 my-3 border border-1 rounded table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr class="text-center">
                        <th class="col-2">Alt</th>
                        <th class="col-4">D+</th>
                        <th class="col-4">D-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=1; $i <= $jumlahAlt; $i++) { ?>
                        <tr class="text-center">
                            <th>
                                <?= 'A' . $i; ?>
                            </th>
                            <td>
                                <?= substr($data['wp']['DP'.$i], 0, 7); ?>
                            </td>
                            <td>
                                <?= substr($data['wp']['DM'.$i], 0, 7); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#ranking-waspas">
            Ranking Waspas
        </a>
    </div>
    <div class="collapse shadow px-4 py-3 rounded border mb-5" id="rangking-waspas">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#ranking-waspas">
            Ranking WASPAS
        </a>
    </div>

    <div class="collapse shadow px-4 py-3 rounded border mb-5" id="ranking-waspas">
        <h4 class="text-secondary">
            #Ranking Waspas
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
                        foreach($data['wp']['rankWp'] as $key => $value) { 
                    ?>
                        <tr>
                            <th>
                                <?= 'A'.$key;?>
                            </th>
                            <td>
                                <?php foreach ($data['wp']['users'] as $n => $alt) {
                                    if ($n == $key) {
                                        echo $alt;
                                    }
                                } ?>
                            </td>
                            <td>
                                <?= substr($value, 0, 6); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>