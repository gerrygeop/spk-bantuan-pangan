<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=BASEURL?>/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="<?=BASEURL;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=BASEURL;?>/css/custom-styles.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Font Merriweather -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title><?= $data['judul'] ?></title>
</head>
<body class="font-poppins bg-light">

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-green mb-3 py-2 shadow-sm">
        <div class="container">
            <a class="navbar-brand fs-4" href="<?= BASEURL; ?>">
                <img src="<?= BASEURL; ?>/img/logo-kemensos.png" alt="Kemensos" width="40">
                BPNT Samarinda
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php if ( isset($_SESSION['user_id']) ) : ?>
                        <li class="nav-item">
                            <a
                                class="nav-link <?= ($data['judul'] === 'Perhitungan') ? 'active':'' ?>"
                                href="<?= BASEURL; ?>/perhitungan/rank">
                                Rekomendasi
                            </a>
                        </li>
                        <?php if ($_SESSION['user_role'] === 'superadmin') : ?>
                            <li class="nav-item">
                                <a
                                    class="nav-link <?= ($data['judul'] === 'Alternatif') ? 'active':'' ?>"
                                    href="<?= BASEURL; ?>/alternatif">
                                    Alternatif
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link <?= ($data['judul'] === 'Help') ? 'active':'' ?>" href="<?= BASEURL; ?>/home/help">Help</a>
                    </li>
                </ul>
                
                <div class="navbar-nav">
                    <?php if ( isset($_SESSION['user_id']) ) : ?>
                        <a
                            class="btn btn-outline-light"
                            href="<?= BASEURL; ?>/auth/logout"
                            role="button"
                        >
                            Logout
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                        </a>
                    <?php else : ?>
                        <a
                            class="btn btn-light w-100 mb-2 mb-lg-0 me-3"
                            href="<?= BASEURL; ?>/auth">
                            Login
                        </a>
                        <a
                            class="btn btn-outline-light"
                            href="<?= BASEURL; ?>/auth/register">
                            Register
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </nav>