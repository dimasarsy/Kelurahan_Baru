<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title><?php echo $judul; ?> | Kelurahan Palmerah</title>
    <link rel="icon" type="image/x-icon " href="<?= base_url('assets/'); ?>/img/home/home.png">

    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

    <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "bc1e3d88-0942-4b8f-b14f-8da128ba00ba";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container">

            <a class="navbar-brand" href="<?php base_url() ?>home"><img
                    src="<?= base_url('assets//img/home/home.png')?>"
                    style="width:50px; height:50px; margin-right:3%"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home'); ?>">
                            <div class="<?=($active=='home'?'active':'')?>">Home</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('berita'); ?>">
                            <div class="<?=($active=='berita'?'active':'')?>">Info Terbaru</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('layanan'); ?>">
                            <div class="<?=($active=='layanan'?'active':'')?>">Layanan</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about'); ?>">
                            <div class="<?=($active=='about'?'active':'')?>">Tentang</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('laporan'); ?>">
                            <div class="<?=($active=='laporan'?'active':'')?>">Lapor</div>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    <?php if (isset($_SESSION['nik'])) : ?>

                    <nav class="navbar navbar-dark bg-dark navbar-expand-sm">
                        <div class="uname">
                            <h5>
                                Hai, <?=$_SESSION['name']?>
                            </h5>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-list-4">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?= base_url('assets/img/profile/') .  $_SESSION['image'] ?>"
                                            width="40" height="40" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <?php if ($this->session->userdata('role_id') ==  2) { ?>
                                        <a class="dropdown-item" href="<?= base_url('user'); ?>"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> My Profile</a>
                                        <a class="dropdown-item" href="<?= base_url('layanan/status_layanan'); ?>">
                                            <i class="fas fa-file fa-sm fa-fw mr-2 text-gray-400"></i> Status Pengajuan
                                        </a>
                                        <?php } else{ ?>
                                        <a class="dropdown-item" href="<?= base_url('dashboard'); ?>"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Dashboard</a>
                                        <?php } ?>
                                        <hr style="margin: 0.2rem 1rem 0.2rem">
                                        <a class="dropdown-item" style="color:red"
                                            href="<?= base_url('auth/logout'); ?>"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Log
                                            Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/auth'); ?>">Login</a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>