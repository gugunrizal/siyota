<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YETC | Form Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url(assets/images/bg.jpg);
        }
    </style>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">YETC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.php">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fitur Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="report.php">Report</a></li>
                            <li><a class="dropdown-item" href="upload_layanan.php">Upload Layanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link justify-content-end" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="row rounded float-end mx-3 my-3">
        <div class="col-md-12">
            <img src="assets/images/logo-2.png" alt="" width="13%" class="float-end">
        </div>
    </div>

    <div class="container">
        <div class="row my-4">
            <div class="col-12 mx-auto">
                <div class="card my-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <img src="assets/images/logo-1.png" class="rounded mx-auto d-block" width="20%" alt="">
                        <h1 class="card-title text-center text-success"><strong>Form Laporan</strong></h1>
                        <hr>
                        <p class="card-text">
                        <form method="POST">
                            <!-- Awal Informasi Pelapor -->
                            <h5 class="title my-3">
                                <b>Informasi Pelapor</b>
                            </h5>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="nope" placeholder="Nomor Handphone">
                            </div>
                            <!-- Akhir Informasi Pelapor -->

                            <!-- Detail Laporan -->
                            <h5 class="title my-3">
                                <b>Detail Laporan</b>
                            </h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="ajuan_layanan" class="form-label">Pilih Kategori Laporan</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Kategori Laporan</option>
                                            <option value="1">Kerusakan</option>
                                            <option value="2">Keluhan</option>
                                            <option value="3">Masukan/Saran</option>
                                            <option value="4">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="lampiran_pendukung" class="form-label">Lampiran Pendukung</label>
                                        <input class="form-control" type="file" id="lampiran_pendukung">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="tanggal_upload" class="form-label">Tanggal Upload</label>
                                        <input class="form-control" type="date" id="tanggal_upload">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="lokasi" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="my-2">
                                        <label for="info" class="form-label">Deskripsi Laporan</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="laporan" style="height: 100px"></textarea>
                                            <label for="laporan">Jawaban Anda</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail Laporan -->
                        </form>
                        </p>
                        <a href="home.php" class="btn btn-secondary">Kembali</a>
                        <a href="#" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-4 mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted h6">Copyright &copy; Komunitas Pemuda Cinta Lingkungan dan Teknologi
                        (Youth Eco-Tech Community) All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>