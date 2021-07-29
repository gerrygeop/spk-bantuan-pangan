<div class="container">
    <div class="mb-5">
        <!-- <h3 class="text-secondary mb-2">Hasil Rekomendasi</h3> -->

        <div class="d-flex flex-column">

            <!-- <div class="row justify-content-center px-2 mb-3">
                <div class="col py-2 px-4 my-3 bg-white border rounded table-responsive">
                    <table class="table caption-top">
                        <caption>Tabel hasil Pengujian Tingkat Akurasi</caption>
                        <thead>
                            <tr>
                                <th>TOPSIS</th>
                                <th>WP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>94%</td>
                                <td>90%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="row justify-content-center px-2 mb-5">
                <div class="col py-2 px-4 my-3 bg-white border rounded table-responsive">
                    <table class="table caption-top">
                        <caption>Tabel hasil Uji Sensitivitas</caption>
                        <thead>
                            <tr>
                                <th>WASPAS</th>
                                <th>VIKOR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    7,61%
                                </td>
                                <td>
                                    -0,14%
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="fw-light text-muted">
                                    <p>Berdasarkan pengujian menggunakan <b class="fw-bold">Tingkat Akurasi</b> dan <b class="fw-bold">Uji Sensitivitas</b> maka metode terbaik adalah metode WASPAS karena memiliki nilai pengujian yang lebih besar.</p>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div> -->



            <div class="mb-5 pt-3">
                <h3 class="text-secondary">Ranking metode WASPAS</h4>

                <div class="row justify-content-between align-items-end my-4">
                    <form action="" method="post" class="col-12 col-lg-5">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" id="searchInput" placeholder="Nama lengkap">
                            <button type="submit" name="submit" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </form>

                    <div class="col-12 col-lg-5 text-end">
                        <a href="<?=BASEURL;?>/perhitungan/waspas" class="btn btn-warning">Detail WASPAS</a>
                        <a href="<?=BASEURL;?>/perhitungan/vikor" class="btn btn-warning">Detail VIKOR</a>
                    </div>
                </div>

                <div class="row px-2">
                    <div class="col bg-white py-2 border rounded">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">Alt</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $ranking = [];
                                    if ( isset($_POST["submit"]) ) {
                                        foreach ($data['wp']['rankWp'] as $key => $value) {
                                            if ($_POST['search'] === $value['nama']) {
                                                $ranking[$key] = $data['wp']['rankWp'][$key];
                                            }

                                            if ($_POST['search'] === '') {
                                                $ranking = $data['wp']['rankWp'];
                                            }
                                        }
                                    } else {
                                        $ranking = $data['wp']['rankWp'];
                                    }

                                    foreach($ranking as $key => $value) {
                                ?>
                                    <tr>
                                        <th>
                                            <?= "A$key" ?>
                                        </th>
                                        <td>
                                            <?= $value['nama'] ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo substr($value['nilai'], 0, 8);
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge  <?= ($value['status'] === 'Diterima') ? 'bg-success':'bg-danger' ?>">
                                                <?= $value['status'] ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>