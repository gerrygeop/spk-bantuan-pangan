<div class="container py-3">

    <div class="row align-items-center justify-content-between mb-3 mb-md-0">
        <div class="col-12 col-md-6">
            <h2 class="text-secondary">>Hasil Perhitungan</h2>
        </div>

        <div class="col-12 col-md-6 text-md-end">
            <a href="<?=BASEURL;?>/kriteria" class="btn btn-warning">
                Matrik Keputusan
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="row justify-content-center mb-5 px-2 px-md-0">

        <div class="col-12 py-2 px-4 my-3 bg-white border rounded table-responsive">
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

        <div class="col-12 py-2 px-4 my-3 bg-white border rounded table-responsive">
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

        <div class="col-12 my-3 w-auto">
            <a href="<?=BASEURL;?>/perhitungan/waspas" class="btn btn-warning">Detail WASPAS</a>
            <a href="<?=BASEURL;?>/perhitungan/vikor" class="btn btn-warning">Detail VIKOR</a>
        </div>
    </div>

</div>