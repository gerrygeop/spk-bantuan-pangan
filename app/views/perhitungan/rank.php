<div class="container">
    <div class="mb-5">

            <div class="mb-5 pt-3">
                <h2 class="text-secondary">Hasil Rekomendasi</h2>

                <div class="row gap-3 justify-content-between align-items-end my-4">
                    <form action="" method="post" class="col-12 col-lg-5">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" id="searchInput" placeholder="Nama lengkap">
                            <button type="submit" name="submit" class="btn btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </form>

                    <div class="col-12 col-lg-5 text-lg-end">
                        <a href="<?=BASEURL;?>/perhitungan" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                            </svg>
                            Hasil Perhitungan
                        </a>
                    </div>
                </div>

                <div class="row px-2">
                    <div class="col table-responsive bg-white py-2 border rounded">

                        <table class="table caption-top">
                            <caption>*Ranking metode WASPAS</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Alt</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Status</th>
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
                                        <td>
                                            <span class="fw-light badge <?= ($value['status'] === 'Diterima') ? 'bg-success':'bg-danger' ?>">
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