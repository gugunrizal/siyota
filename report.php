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
    <title>YETC | Form Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url(assets/images/bg.jpg);
        }
    </style>
</head>

<body>

    <?php

    include("logic/conn.php");

    $id = $_SESSION['username'];
    $sql = "SELECT * FROM tb_user WHERE username = '$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    ?>

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
                        <form method="POST" action="logic/logic-report.php" enctype="multipart/form-data">
                            <!-- Awal Informasi Pelapor -->
                            <h5 class="title my-3">
                                <b>Informasi Pelapor</b>
                            </h5>
                            <div class="mb-3">
                                <input type="text" name="id_user" id="id_user" value="<?= $data['id'] ?>" hidden>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="<?= $data['nama'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?= $data['email'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="nope" placeholder="Nomor Handphone" name="nope" value="<?= $data['no_hp'] ?>" readonly>
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
                                        <select class="form-select" aria-label="Default select example" name="kategori">
                                            <option selected>Pilih Kategori Laporan</option>
                                            <option value="Kerusakan">Kerusakan</option>
                                            <option value="Keluhan">Keluhan</option>
                                            <option value="Masukan/Saran">Masukan/Saran</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="lampiran_pendukung" class="form-label">Lampiran Pendukung</label>
                                        <input class="form-control" type="file" id="lampiran_pendukung" name="lampiran_pendukung">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="tanggal_upload" class="form-label">Tanggal Upload</label>
                                        <input class="form-control" type="date" id="tanggal_upload" name="tanggal_upload">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="my-2">
                                        <label for="lokasi" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="my-2">
                                        <label for="info" class="form-label">Deskripsi Laporan</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="laporan" style="height: 100px" name="laporan"></textarea>
                                            <label for="laporan">Jawaban Anda</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail Laporan -->
                            <a href="home.php" class="btn btn-secondary">Kembali</a>
                            <!-- <a href="#" class="btn btn-primary">Submit</a> -->
                            <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
                        </form>
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