<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta
        content="Learnify dibuat ditujukan agar para siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja."
        name="Description" />
    <meta content="Learnify, E-learning, Open Source, Syauqi Zaidan Khairan Khalaf, github, programmer indonesia"
        name="keywords" />
    <link rel="icon" href="<?= base_url('assets/') ?>img/elearn.png" type="image/png">
    <title>Mathify - Belajar Dimana Saja & Kapan Saja !</title>

    <style>
    .title-card {
        width: 20rem;
        height: 15rem;
        background-image: url('<?= base_url('assets/') ?>img/courses/mtk.jpg');
        background-size: cover;
    }

    .card:hover {
        opacity: 100% !important;
    }

    .title-card:hover {
        filter: brightness(40%);
    }

    .card-text-title {
        color: white;
        font-weight: bold;
        margin-top: 15vh;
        font-size: 20px;
    }

    .card-text-title:hover {
        color: #4dbf1c;
    }

    .card-text-title2 {
        color: white;
        font-weight: bold;
        margin-top: 12.3vh;
        font-size: 20px;
    }

    .card-text-title2:hover {
        color: #4dbf1c;
    }

    .card-baris2 {
        margin-right: -13vh;
        margin-top: 5vh;
    }

    .video-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .page-isi {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .center-image {
        text-align: center;
    }

    .center-image img {
        height: 150px;
        width: 220px;
    }


    .custom-box {
        max-width: 700px;
        background-color: #ababab;
        margin: 40px auto;
        padding: 30px;
        border-radius: 10px;
        animation: fadeInRight 1.5s ease;
    }

    table {
        border-color: rgb(255, 255, 255);
    }
    </style>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>





    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style-quiz.css">
    <script type="text/javascript">
    $(document).ready(() => {
        $("#nav<?= $this->uri->segment(2); ?>").addClass('active')
    })
    </script>

</head>

<body>

    <!--================Header Menu Area =================-->

    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img
                        src="<?= base_url('assets/') ?>img/elearnn.png" style="height:50px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item" id="nav"><a class="nav-link" href="<?= base_url('welcome') ?>">Home</a>
                        </li>
                        <li class="nav-item" id="navtentang"><a class="nav-link"
                                href="<?= base_url('welcome/materi') ?>">Materi</a>
                        </li>
                        <li class="nav-item " id="navpelajaran">
                            <a href="<?= base_url('welcome/latihan') ?>" class="nav-link" role="button"
                                aria-haspopup="true" aria-expanded="false">Latihan</a>
                        </li>
                        <li class="nav-item" id="navkontak"><a class="nav-link"
                                href="<?= base_url('welcome/evaluasi') ?>">Evaluasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--================ END Header Menu Area =================-->