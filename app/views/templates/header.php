<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="<?=BASEURL;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Font Kaushan -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        .font-poppins{
            font-family: 'Poppins', sans-serif;
        }
        .navbar-brand{
            font-family: 'Merriweather Sans', sans-serif;
        }
        .cut-text{
            max-width: 100px !important;
            overflow: hidden !important;
            white-space: nowrap !important;
            text-overflow: ellipsis !important;
        }
    </style>

    <title><?= $data['judul'] ?></title>
</head>
<body class="font-poppins bg-light">

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-success mb-3 py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fs-4 text-light" href="<?= BASEURL; ?>">BPNT Samarinda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php if ( isset($_SESSION['user_id']) ) : ?>
                        <li class="nav-item">
                            <a
                                class="nav-link <?= ($data['judul'] === 'Perhitungan') ? 'active':'' ?>"
                                href="<?= BASEURL; ?>/perhitungan"
                            >
                                Rekomendasi
                            </a>
                        </li>
                        <?php if ($_SESSION['user_role'] === 'superadmin') : ?>
                            <li class="nav-item">
                                <a class="nav-link <?= ($data['judul'] === 'Alternatif') ? 'active':'' ?>" href="<?= BASEURL; ?>/alternatif">Alternatif</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link <?= ($data['judul'] === 'Help') ? 'active':'' ?>" href="<?= BASEURL; ?>/home/help">Help</a>
                    </li>
                </ul>
                
                <?php if ( isset($_SESSION['user_id']) ) : ?>
                    <a class="nav-link btn btn-light btn-sm text-dark text-uppercase px-3" href="<?= BASEURL; ?>/auth/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-link btn btn-light btn-sm text-dark text-uppercase px-3 me-3" href="<?= BASEURL; ?>/auth">Login</a>
                    <a class="nav-link btn btn-outline-light btn-sm text-dark text-uppercase px-3" href="<?= BASEURL; ?>/auth/register">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>