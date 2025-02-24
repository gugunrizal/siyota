<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YETC | Pengajuan Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url(assets/images/bg.jpg);
        }
    </style>
</head>

<body>

    <div class="row rounded float-end mx-3 my-3">
        <div class="col-md-12">
            <img src="assets/images/logo-2.png" alt="" width="13%" class="float-end">
        </div>
    </div>

    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 mx-auto">
                <div class="card my-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <img src="assets/images/logo-1.png" class="rounded mx-auto d-block" width="20%" alt="">
                        <h1 class="card-title text-center text-success"><strong>Form Pengajuan Layanan</strong></h1>
                        <hr>
                        <p class="card-text">
                        <form method="POST">
                            <!-- Awal Data Diri -->
                            <h5 class="title my-3">
                                <b>Data Diri</b>
                            </h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="number" class="form-control" id="nope" placeholder="Nomor Handphone">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Data Diri -->

                            <!-- Detail Pengajuan -->
                            <h5 class="title my-3">
                                <b>Detail Pengajuan</b>
                            </h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="ajuan_layanan" class="form-label">Pilih Ajuan Layanan</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Layanan</option>
                                            <option value="1">Teknologi/IT</option>
                                            <option value="2">Perbaikan/Infrastruktur</option>
                                            <option value="3">Edukasi/Workshop</option>
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
                                        <label for="info" class="form-label">Deskripsi Pengajuan</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="jawaban" style="height: 100px"></textarea>
                                            <label for="jawaban">Jawaban Anda</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="tanggal_upload" class="form-label">Tanggal Upload</label>
                                        <input class="form-control" type="date" id="tanggal_upload">
                                    </div>
                                </div>
                            </div>
                            <!-- Detail Pengajuan -->

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

    <?php

    include("template/footer.php");

    ?>