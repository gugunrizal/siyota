<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SiYota | Lingkungan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: green">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="home.php" style="color: white;">SiYota</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-success" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <?php require_once "template/navigasi.php" ?>
        <!-- Akhir Navbar -->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="education.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Education
                        </a>
                        <a class="nav-link active" href="lingkungan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Lingkungan
                        </a>
                        <a class="nav-link" href="chat-bot.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Chat Bot
                        </a>
                        <a class="nav-link" href="games.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Games
                        </a>
                        <a class="nav-link" href="marketplace.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Marketplace
                        </a>
                        <div class="sb-sidenav-menu-heading">Lainnya</div>
                        <a class="nav-link" href="info.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Info
                        </a>
                        <a class="nav-link" href="upload_layanan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Pengajuan Layanan
                        </a>
                        <a class="nav-link" href="report.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Laporan
                        </a>
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="row justify-content-md-center">
                        <!-- <div class="col-1"></div> -->
                        <div class="col-12 col-md-7 mx-1">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mt-5"><b><i>Lingkungan</i></b></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-success"><b>Selamat Datang di Menu Lingkungan</b></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="assets/images/bg.jpg" alt="" width="100%" class="shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                                </div>
                                <div class="col-md-3">
                                    <img src="assets/images/bg.jpg" alt="" width="100%" class="shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                                </div>
                                <div class="col-md-3">
                                    <img src="assets/images/bg.jpg" alt="" width="100%" class="shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                                </div>
                            </div>
                            <div class="row my-2">
                                <span class="col align-baseline">
                                    <a href="#" class="h6 text-success text-decoration-none">
                                        <i class="fas fa-tachometer-alt text-success"></i>
                                        <strong>Informasi Kegiatan Lingkungan</strong>
                                    </a>
                                </span>
                            </div>
                            <div class="row my-2">
                                <span class="col align-baseline">
                                    <a href="#" class="h6 text-success text-decoration-none">
                                        <i class="fas fa-tachometer-alt text-success"></i>
                                        <strong>Sistem Pengelolaan Sampah</strong>
                                    </a>
                                </span>
                            </div>
                            <div class="row my-2">
                                <span class="col align-baseline">
                                    <a href="#" class="h6 text-success text-decoration-none">
                                        <i class="fas fa-tachometer-alt text-success"></i>
                                        <strong>Monitoring IoT</strong>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-5">
                            <img src="assets/images/bg.jpg" alt="" width="100%" class="shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                        </div>
                    </div>

                    <hr>
                    .
                    <div class="container-fluid px-5">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="fas fa-tachometer-alt text-success"></i>
                                                <strong>Informasi Kegiatan Lingkungan</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12 col-md-3 bg-success py-3 mx-1 rounded my-2">
                                        <img src="assets/images/bg.jpg" alt="" width="100%">
                                        <p class="fw-semibold text-white">Kegiatan Green Journey Nature Conversation</p>
                                        <a href="#" class="btn btn-warning d-grid">Lihat Lebih Detail</a>
                                    </div>
                                    <div class="col-12 col-md-3 bg-success py-3 mx-1 rounded my-2">
                                        <img src="assets/images/bg.jpg" alt="" width="100%">
                                        <p class="fw-semibold text-white">Kegiatan Green Journey Nature Conversation</p>
                                        <a href="#" class="btn btn-warning d-grid">Lihat Lebih Detail</a>
                                    </div>
                                    <div class="col-12 col-md-3 bg-success py-3 mx-1 rounded my-2">
                                        <img src="assets/images/bg.jpg" alt="" width="100%">
                                        <p class="fw-semibold text-white">Kegiatan Green Journey Nature Conversation</p>
                                        <a href="#" class="btn btn-warning d-grid">Lihat Lebih Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-success"><b>LAINNYA</b></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-1 text-success">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="badge fas fa-tachometer-alt text-bg-success"></i>
                                                <strong>Sistem Pengelolaan Sampah</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-1 text-success">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="badge fas fa-tachometer-alt text-bg-success"></i>
                                                <strong>Monitoring IoT</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="container-fluid px-5">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="fas fa-tachometer-alt text-success"></i>
                                                <strong>Sistem Pengelolaan Sampah</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-12 col-md-5 mx-1 my-1 bg-success py-2 rounded">
                                                <img src="assets/images/bg.jpg" width="100%" alt="">
                                                <a href="#" class="btn btn-warning d-grid">Bank Sampah</a>
                                            </div>
                                            <div class="col-12 col-md-5 mx-1 my-1 bg-success py-2 rounded">
                                                <img src="assets/images/bg.jpg" width="100%" alt="">
                                                <a href="#" class="btn btn-warning d-grid">Pertanian Organik</a>
                                            </div>
                                            <div class="col-12 col-md-5 mx-1 my-1 bg-success py-2 rounded">
                                                <img src="assets/images/bg.jpg" width="100%" alt="">
                                                <a href="#" class="btn btn-warning d-grid">Pusat Kerajinan Barang Bekas</a>
                                            </div>
                                            <div class="col-12 col-md-5 mx-1 my-1 bg-success py-2 rounded">
                                                <img src="assets/images/bg.jpg" width="100%" alt="">
                                                <a href="#" class="btn btn-warning d-grid">Donasi Sampah</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p class="fw-bold text-success h6">Lihat Pusat Pengolaan Sampah Terdekat</p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.637177721107!2d107.65892917414173!3d-6.933895167872038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9e65b4f0933%3A0xf4fc4c94dd779854!2sDinas%20Lingkungan%20Hidup%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1739174941741!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>

                                <div class="row my-4">
                                    <div class="col-12 col-md-12">
                                        <p class="text-warning h3">Bank Sampah</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-2 py-2 mx-1 bg-success rounded my-2">
                                        <img src="assets/images/bg.jpg" width="100%" alt="">
                                        <p class="text-white">Nama Bank Sampah</p>
                                        <p class="text-white">Lokasi Bank Sampah</p>
                                        <p class="text-white">Jam Operasional Bank Sampah</p>
                                        <p class="text-white">Kontak Person</p>
                                    </div>
                                    <div class="col-12 col-md-2 py-2 mx-1 bg-success rounded my-2">
                                        <img src="assets/images/bg.jpg" width="100%" alt="">
                                        <p class="text-white">Nama Bank Sampah</p>
                                        <p class="text-white">Lokasi Bank Sampah</p>
                                        <p class="text-white">Jam Operasional Bank Sampah</p>
                                        <p class="text-white">Kontak Person</p>
                                    </div>
                                    <div class="col-12 col-md-2 py-2 mx-1 bg-success rounded my-2">
                                        <img src="assets/images/bg.jpg" width="100%" alt="">
                                        <p class="text-white">Nama Bank Sampah</p>
                                        <p class="text-white">Lokasi Bank Sampah</p>
                                        <p class="text-white">Jam Operasional Bank Sampah</p>
                                        <p class="text-white">Kontak Person</p>
                                    </div>
                                    <div class="col-12 col-md-2 py-2 mx-1 bg-success rounded my-2">
                                        <img src="assets/images/bg.jpg" width="100%" alt="">
                                        <p class="text-white">Nama Bank Sampah</p>
                                        <p class="text-white">Lokasi Bank Sampah</p>
                                        <p class="text-white">Jam Operasional Bank Sampah</p>
                                        <p class="text-white">Kontak Person</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-4">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-success"><b>LAINNYA</b></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-1 text-success">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="badge fas fa-tachometer-alt text-bg-success"></i>
                                                <strong>Informasi Kegiatan Lingkungan</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-1 text-success">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="badge fas fa-tachometer-alt text-bg-success"></i>
                                                <strong>Monitoring IoT</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="col align-baseline">
                                    <a href="#" class="h6 text-success text-decoration-none">
                                        <i class="badge fas fa-tachometer-alt text-bg-success"></i>
                                        <strong>Monitoring IoT</strong>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-12 col-md-8">
                                <div class="row bg-info">
                                    <div class="row mx-auto">
                                        <div class="col bg-info">
                                            <div class="row my-2">
                                                <div class="col-12">Berdasarkan Lokasimu sekarang, Baleendah</div>
                                            </div>
                                            <div class="row my-2">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 my-4">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-success"><b>LAINNYA</b></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-1 text-success">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="badge fas fa-tachometer-alt text-bg-success"></i>
                                                <strong>Informasi Kegiatan Lingkungan</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-1 text-success">
                                        <span class="col align-baseline">
                                            <a href="#" class="h6 text-success text-decoration-none">
                                                <i class="badge fas fa-tachometer-alt text-bg-success"></i>
                                                <strong>Monitoring IoT</strong>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>