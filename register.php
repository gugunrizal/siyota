<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YETC | Register</title>
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
        <div class="row my-3">
            <div class="col-md-10 mx-auto">
                <div class="card my-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <!-- <div class="card-header"> -->
                    <!-- <img src="assets/images/bg-header.png" class="card-img-top" alt=""> -->
                    <!-- </div> -->
                    <div class="card-body">
                        <img src="assets/images/logo-1.png" alt="" width="20%" class="rounded mx-auto d-block">
                        <h1 class="card-title text-center text-success"><strong>Registrasi Akun</strong></h1>
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

                            <!-- Awal Informasi Akun -->
                            <h5 class="title my-3">
                                <b>Informasi Akun</b>
                            </h5>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="password2" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Informasi Akun -->

                            <!-- Awal Prefensi Pengguna -->
                            <h5 class="title my-3">
                                <b>Prefensi Pengguna</b>
                            </h5>

                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Prefensi Pengguna</option>
                                <option value="1">Pelajar</option>
                                <option value="2">Pelaku Usaha</option>
                                <option value="3">Aktivis Lingkungan</option>
                                <option value="4">Lainnya</option>
                            </select>
                            <!-- Akhir Prefensi Pengguna -->

                            <!-- Awal Minat Utama -->
                            <h5 class="title my-3">
                                <b>Minat Utama</b>
                            </h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="iot">
                                <label class="form-check-label" for="iot">
                                    Edukasi IoT
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="marketplace">
                                <label class="form-check-label" for="marketplace">
                                    Marketplace Produk Ramah Lingkungan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="peldig">
                                <label class="form-check-label" for="pelatihan_digitak">
                                    Pelatihan Digital
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="edukasi_ar">
                                <label class="form-check-label" for="edukasi_ar">
                                    Edukasi AR untuk Anak
                                </label>
                            </div>
                            <!-- Akhir Minat Utama -->

                            <!-- Awal Informasi Tambahan -->
                            <h5 class="title my-3">
                                <b>Informasi Tambahan</b>
                            </h5>
                            <div class="mb-3">
                                <label for="info" class="form-label">Bagaimana Anda mengetahui website ini?</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="jawaban" style="height: 100px"></textarea>
                                    <label for="jawaban">Jawaban Anda</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="info" class="form-label">Apakah Anda ingin menerima pembaruan dan berita melalui email?</label>
                                <!-- <div class="form-check"> -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="iot">
                                    <label class="form-check-label" for="iot">
                                        Ya
                                    </label>
                                </div>
                                <!-- <input class="form-check-input" type="radio" name="ya" id="ya">
                                    <label class="form-check-label" for="ya">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tidak" id="tidak">
                                    <label class="form-check-label" for="tidak">
                                        Tidak
                                    </label>
                                </div> -->
                                <!-- </div> -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="setuju">
                                    <label class="form-check-label" for="setuju">
                                        Dengan ini saya menyatakan bahwa data yang saya berikan adalah benar dan saya menyetujui kebijakan privasi yang berlaku.
                                    </label>
                                </div>
                                <!-- Akhir Informasi Tambahan -->

                        </form>
                        </p>
                        <a href="login.php" class="btn btn-primary d-grid gap-2">Daftar</a>
                        <div class="row mt-3 justify-content-md-center">
                            <div class="col-8 text-center">
                                <p class="text-success">Sudah punya akun? <a href="login.php" class="text-success"><strong>Klik Disini</strong></a></p>
                            </div>
                        </div>
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