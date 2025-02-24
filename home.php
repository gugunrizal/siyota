<?php

session_start();
$page = "Home";

if (!isset($_SESSION['username'])) {

    header("Location: login.php");
}

require_once "logic/conn.php";
$username = $_SESSION['username'];
$sql = "SELECT * FROM tb_user WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SiYota | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- Navbar-->
    <?php include "template/navigasi.php" ?>
    <!-- Akhir Navbar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link active" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-house"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="education.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-book"></i></div>
                            Education
                        </a>
                        <a class="nav-link" href="lingkungan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-seedling"></i></div>
                            Lingkungan
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-brands fa-rocketchat"></i></div>
                            Chat Bot
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-gamepad"></i></div>
                            Games
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-store"></i></div>
                            Marketplace
                        </a>
                        <div class="sb-sidenav-menu-heading">Lainnya</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-circle-info"></i></div>
                            Info
                        </a>
                        <a class="nav-link" href="upload-layanan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-cloud-arrow-up"></i></div>
                            Pengajuan Layanan
                        </a>
                        <a class="nav-link" href="report.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-solid fa-flag"></i></div>
                            Laporan
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-8 mx-2">
                            <div class="row my-4">
                                <div class="col-12 mb-4">
                                    <h3 class="mt-3"><b><i>Selamat Datang</i></b></h3>
                                    <h1 class="text-success"><b>Sobat Yota</b></h1>
                                    <p class="me-3" style="font-size: 150px; font-weight: bold; color:green; margin-top: -30px">SiYota</p>
                                    <h4 style="font-size: 30px; font-weight: bold; font-style: italic; margin-top: -25px;">Innovation for Earth</h4>
                                    <p style="text-align: justify;">
                                        Platform Sistem Informasi Youth of Technology and Action yang akan menemani sobat-sobat untuk menyalurkan minat, mengembangkan bakat, menampung ide dan gagasan, bertukar pandangan, dan berbagi pengalaman untuk kehidupan berkelanjutan.
                                    </p>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <button class="btn btn-warning d-grid gap-2" id="playPauseButton">
                                                Putar Jinggle YETC
                                            </button>
                                            <audio id="audio">
                                                <source src="assets/audio/audio.mp3" type="audio/mpeg">
                                                Browser kamu tidak mendukung audio tag.
                                            </audio>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mt-4">
                            <img src="assets/images/bg.jpg" alt="" width="100%" class="shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <h1 class="text-success">
                                    <b>Halo,
                                        <?= $data['nama'] ?>
                                    </b>
                                </h1>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <p class="fw-bold" id="location">
                                    <i class='fas fa-solid fa-location-dot'></i> Menunggu Lokasi...
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="fw-bold">
                                    <i class='fas fa-solid fa-calendar'></i>
                                    <?php
                                    echo date('d/M/Y');
                                    ?>
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="fw-bold" id="jam">
                                    <?php
                                    date_default_timezone_set("Asia/jakarta");
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row mx-auto">
                            <div class="col bg-info">
                                <div class="row mt-4">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Suhu</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Sensor Potensi Banjir</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Pesan</p>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Kelembapan</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Sensor Potensi Gempa</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Pesan</p>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Kecepatan Angin</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Senso Kualitas Air</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Pesan</p>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Hujan atau Tidak Hujan</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p class="text-success text-center"><b>Kamu memasang Perangkat Penyiraman Otomatis</b></p>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Kualitas Air Hujan</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Kelembapan Tanah</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Pesan</p>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Cuaca</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Status Penyiraman</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Pesan</p>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Potensi Bencana</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                    </div>
                                    <div class="col-12 col-md-6 d-grid gap-2">
                                        <p class="btn btn-warning d-grid gap-2">Jelajahi Perangkat Lainnya</p>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">DARURAT!</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <p class="btn btn-success d-grid gap-2">Pesan</p>
                                    </div>
                                </div>
                                <!-- <div class="col-2">
                                        <p class="btn btn-success d-grid gap-2">Suhu</p>
                                    </div>
                                    <div class="col-2">
                                        <p class="btn btn-success d-grid gap-2">Suhu</p>
                                    </div> -->
                            </div>
                        </div>
                        <!-- </div>
                        </div> -->
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h1 class="text-success text-center"><strong>Kegiatan Terbaru</strong></h1>
                            <div class="row my-4 text-center">
                                <div class="col-md-4">
                                    <p class="btn btn-success d-grid gap-2">Soft SKill</p>
                                    <div class="card">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-center btn btn-success d-grid gap-2">Bootcamp</p>
                                    <div class="card">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-center btn btn-success d-grid gap-2">E-Learning</p>
                                    <div class="card">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mx-auto my-1">
                                    <a href="#" class="btn btn-warning d-grid gap-2">Daftar Pelatihan</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mx-auto my-1">
                                    <a href="#" class="btn btn-warning d-grid gap-2">Daftar Event</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h1 class="text-success text-center"><strong>Artikel</strong></h1>
                            <div class="row my-4">
                                <div class="col-md-10 mx-auto">
                                    <div class="card">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text h4 text-success">
                                                <strong>Menyelamatkan Bumi dengan Inovasi Ramah Lingkungan</strong>
                                            </p>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime assumenda sunt nemo temporibus. Laboriosam quaerat doloremque delectus. Cum veniam repellat sapiente dicta nesciunt. Exercitationem, sapiente accusamus! Mollitia consectetur et officiis, saepe ducimus optio consequuntur eaque laboriosam sequi omnis laborum, natus eligendi voluptatibus inventore iusto! Necessitatibus, similique velit? Quisquam, vel rem.
                                            </p>
                                            <a href="#" class="text-success">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-2">

                    <div class="row my-2">
                        <div class="col-12">
                            <h2 class="text-success text-center"><strong>Layanan Kami</strong></h2>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 col-md-2 bg-success text-white rounded px-2 py-2 mx-auto my-1">
                            <h4 class="text-center"><strong>Teknologi</strong></h4>
                            <hr>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                            </ul>
                            <a href="#" class="btn btn-warning d-grid gap-2">Isi Formulir</a>
                        </div>
                        <div class="col-12 col-md-2 bg-success text-white rounded px-2 py-2 mx-auto my-1">
                            <h4 class="text-center"><strong>Teknologi</strong></h4>
                            <hr>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                            </ul>
                            <a href="#" class="btn btn-warning d-grid gap-2">Isi Formulir</a>
                        </div>
                        <div class="col-12 col-md-2 bg-success text-white rounded px-2 py-2 mx-auto my-1">
                            <h4 class="text-center"><strong>Teknologi</strong></h4>
                            <hr>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                            </ul>
                            <a href="#" class="btn btn-warning d-grid gap-2">Isi Formulir</a>
                        </div>
                        <div class="col-12 col-md-2 bg-success text-white rounded px-2 py-2 mx-auto my-1">
                            <h4 class="text-center"><strong>Teknologi</strong></h4>
                            <hr>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque.</li>
                            </ul>
                            <a href="#" class="btn btn-warning d-grid gap-2">Isi Formulir</a>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row my-2">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="h3 text-success text-center"><strong>Program Kami</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro1.png" alt="" class="" width="50%">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                                </a>
                            </div>
                            <div class="col-12 col-md-6 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro3.png" alt="" class="" width="100%">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro4.png" alt="" class="" width="100%">
                                </a>
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro5.png" alt="" class="" width="100%">
                                </a>
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro7.png" alt="" class="" width="100%">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro6.png" alt="" class="" width="100%">
                                </a>
                            </div>
                            <div class="col-12 col-md-3 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro8.png" alt="" class="" width="100%">
                                </a>
                            </div>
                            <div class="col-12 col-md-3 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro1.png" alt="" class="" width="100%">
                                </a>
                            </div>
                            <div class="col-12 col-md-3 text-center">
                                <a href="#">
                                    <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                                </a>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row my-4">
                        <div class="col-md-12 my-4">
                            <p class="h3 text-success text-center"><strong>Mari Berkenalan dengan kami</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 ms-4">
                            <p class="h6" style="text-align: justify;">
                                Saya percaya bahwa masa depan generasi berikutnya sangat bergantung pada langkah yang kita ambil saat ini untuk menghadapi isu lingkungan, khususnya dampak perubahan iklim. Oleh karena itu, penting bagi kita untuk memprioritaskan keberlanjutan dengan memanfaatkan inovasi teknologi sebagai alat transformasi. Teknologi dapat menjadi solusi efektif dalam pengelolaan sumber daya, pengurangan limbah, dan mitigasi dampak iklim jika digunakan secara bijak. Namun, keberhasilan ini tidak mungkin tercapai tanpa kolaborasi erat antara berbagai pihak, mulai dari masyarakat, pelaku usaha, akademisi, hingga pemerintah. Bersama, kita memiliki tanggung jawab untuk menciptakan lingkungan yang lebih baik agar generasi mendatang dapat hidup dalam dunia yang sehat, berkelanjutan, dan penuh peluang.
                            </p>
                            <p class="h5"><strong>Tri Febriansah</strong></p>
                            <p class="text-success"><i>Founder of Community</i></p>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row my-4">
                        <div class="col-md-12">
                            <p class="h3 text-success text-center"><strong>Tentang Kami</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 mx-auto">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                        <div class="col-12 col-md-4 mx-auto">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                        <div class="col-12 col-md-4 mx-auto">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                        <div class="col-12 col-md-4 mx-auto">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                        <div class="col-12 col-md-4 mx-auto">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                        <div class="col-12 col-md-4 mx-auto">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                        <div class="col-12 col-md-4 mx-auto">
                            <img src="assets/images/logo-program/pro2.png" alt="" class="" width="100%">
                        </div>
                    </div>

                    <hr class="my-3">

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Komunitas Pemuda Cinta Lingkungan dan Teknologi
                            (Youth Eco-Tech Community) All rights reserved
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php

    include("template/footer.php");

    ?>