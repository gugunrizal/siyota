<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SiYota | Education</title>
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
                        <a class="nav-link active" href="education.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Education
                        </a>
                        <a class="nav-link" href="lingkungan.php">
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
                        <div class="col-12 col-md-8 mx-2">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mt-5"><b><i>Selamat Datang</i></b></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-success"><b>Di E-Learning SiYota</b></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 d-grid gap-2">
                                    <p class="btn btn-success">Hard Skill</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Internet Of Things</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Web</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Pertanian</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-5 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Konservasi</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 d-grid gap-2">
                                    <p class="btn btn-success">Soft Skill</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Public Speaking</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Human Resource</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Komunikasi</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <div class="card shadow-lg mb-5 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                        <div class="card-text bg-success text-white">
                                            <h6 class="card-title rounded pt-1">Kepemimpinan</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <a href="#" class="btn btn-warning d-grid gap-2">Berikutnya</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-3 mt-5">
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-success"><b>LAINNYA</b></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Artikel</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Buku Anak dan Umum</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Penelitian</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Resep Makanan</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <!-- <div class="col-1"></div> -->
                        <div class="col-12 col-md-6 mx-2">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mt-5"><b><i>Informasi</i></b></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-success"><b>Bootcamp dan Kegiatan Offline Edukasi SiYota</b></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-6 d-grid gap-2">
                                    <p class="btn btn-success">Bootcamp</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-success"><b>Pelatihan Pertanian Organik</b></h6>
                                            <table class="text-success">
                                                <tr>
                                                    <td>Kuota</td>
                                                    <td>:</td>
                                                    <td>15 Orang</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td>:</td>
                                                    <td>Magma Bike Pangalengan</td>
                                                </tr>
                                                <tr>
                                                    <td>Hari/Tanggal</td>
                                                    <td>:</td>
                                                    <td>Senin, 23 Januari 2025</td>
                                                </tr>
                                                <tr>
                                                    <td>Waktu</td>
                                                    <td>:</td>
                                                    <td>09.00 s.d selesai</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <a href="#" class="btn btn-warning ">Daftar</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <a href="#" class="text-success h6">Kegiatan Lainnya</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 d-grid gap-2">
                                    <p class="btn btn-success">Pelatihan Offline</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <div class="card shadow-lg mb-3 bg-body-tertiary rounded p-1">
                                        <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-success"><b>Praktik penerapan sensor kualitas air sungai
                                                </b></h6>
                                            <table class="text-success">
                                                <tr>
                                                    <td>Kuota</td>
                                                    <td>:</td>
                                                    <td>15 Orang</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td>:</td>
                                                    <td>Magma Bike Pangalengan</td>
                                                </tr>
                                                <tr>
                                                    <td>Hari/Tanggal</td>
                                                    <td>:</td>
                                                    <td>Senin, 23 Januari 2025</td>
                                                </tr>
                                                <tr>
                                                    <td>Waktu</td>
                                                    <td>:</td>
                                                    <td>09.00 s.d selesai</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="btn btn-warning">Daftar</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <a href="#" class="text-success h6">Kegiatan Lainnya</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-3 mt-5">
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-success"><b>LAINNYA</b></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Artikel</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Buku Anak dan Umum</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Penelitian</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3" style="color: green; font-size: 20px;">
                                    <span class="badge text-bg-success">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <b>Resep Makanan</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="container">
                        <div class="row my-3">
                            <div class="col">
                                <h4 class="text-success"><strong>Artikel</strong></h4>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12 col-md-5 mx-auto bg-warning rounded py-2 my-2">
                                <h4 class="text-white text-center">Judul Artikel</h4>
                                <div class="card">
                                    <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <p class="text-white">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis optio commodi magnam amet velit exercitationem fugit soluta sunt tempora porro?
                                </p>
                            </div>
                            <div class="col-12 col-md-5 mx-auto bg-warning rounded py-2 my-2">
                                <h4 class="text-white text-center">Judul Artikel</h4>
                                <div class="card">
                                    <img src="assets/images/bg.jpg" class="card-img-top" alt="...">
                                </div>
                                <p class="text-white">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis optio commodi magnam amet velit exercitationem fugit soluta sunt tempora porro?
                                </p>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-12 text-center">
                                <a href="#" class="text-success h4">Lihat Artikel Lainnya</a>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Komunitas Pemuda Cinta Lingkungan dan Teknologi (Youth Eco-Tech Community) All rights reserved
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