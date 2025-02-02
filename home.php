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
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link active" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="education.php">
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
                        <div class="col-8 mx-2">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mt-5"><b><i>Selamat Datang</i></b></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-success"><b>Sobat Yota</b></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 style="font-size: 150px; font-weight: bold; color:green; margin-top: -30px">SiYota</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 style="font-size: 30px; font-weight: bold; font-style: italic; margin-top: -25px;">Innovation for Earth</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-success">
                                        Platform Sistem Informasi Youth of Technology and Action yang akan menemani sobat-sobat untuk menyalurkan minat, mengembangkan bakat, menampung ide dan gagasan, bertukar pandangan, dan berbagi pengalaman untuk kehidupan berkelanjutan.
                                    </h5>
                                </div>
                            </div>
                            <div class="row my-5">
                                <div class="col-4">
                                    <a href="#" class="btn btn-warning d-grid gap-2">Putar Jinggle YETC</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mt-5">
                            <img src="assets/images/bg.jpg" alt="" width="100%" class="shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                        </div>
                        <div class="col-1">

                        </div>
                        <hr>
                        <div class="container">
                            <div class="container">
                                <div class="row justify-content-md-center">
                                    <div class="col">
                                        <h1 class="text-success"><b>Halo, Teriyaki</b></h1>
                                    </div>
                                </div>
                                <div class="row text-center mx-4">
                                    <div class="col-4">
                                        <p>Bandung</p>
                                    </div>
                                    <div class="col-4">
                                        <p>Bandung</p>
                                    </div>
                                    <div class="col-4">
                                        <p>Bandung</p>
                                    </div>
                                </div>
                                <div class="row bg-info">
                                    <div class="col">
                                        <div class="row my-2">
                                            <div class="col">Berdasarkan Lokasimu sekarang, Baleendah</div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Suhu</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Sensor Potensi Banjir</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Pesan</p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Kelembapan</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Sensor Potensi Gempa</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Pesan</p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Kecepatan Angin</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Senso Kualitas Air</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Pesan</p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Hujan atau Tidak Hujan</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">
                                                <p class="text-success"><b>Kamu memasang Perangkat Penyiraman Otomatis</b></p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Kualitas Air Hujan</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Kelembapan Tanah</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Pesan</p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Cuaca</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Status Penyiraman</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Pesan</p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Potensi Bencana</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Loading ...</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">
                                                <p class="btn btn-warning d-grid gap-2">Jelajahi Perangkat Lainnya</p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">DARURAT!</p>
                                            </div>
                                            <div class="col-2">
                                                <p class="btn btn-success d-grid gap-2">Pesan</p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <!-- <div class="col-2">
                                        <p class="btn btn-success d-grid gap-2">Suhu</p>
                                    </div>
                                    <div class="col-2">
                                        <p class="btn btn-success d-grid gap-2">Suhu</p>
                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-lg-6">
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
                            <div class="col-lg-6">
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
                            <div class="col">
                                <h2 class="text-success text-center"><strong>Layanan Kami</strong></h2>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 bg-success text-white rounded px-2 py-2 mx-auto">
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
                            <div class="col-md-2 bg-success text-white rounded px-2 py-2 mx-auto">
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
                            <div class="col-md-2 bg-success text-white rounded px-2 py-2 mx-auto">
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
                            <div class="col-md-2 bg-success text-white rounded px-2 py-2 mx-auto">
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

                        <div class="row">
                            <div class="col"></div>
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