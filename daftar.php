<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrasi Akun</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">
                        <center>Registration Info<center>
                    </h2>
                    <form method="POST" action="logic-daftar.php">
                        <!-- Awal Data Diri -->
                        <h5 class="title">
                            <b>Data Diri</b>
                        </h5>
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="nope" class="form-control" id="nope" placeholder="Nomor Handphone">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <!-- Akhir Data Diri -->

                        <!-- Awal Informasi Akun -->
                        <h5 class="title">
                            <b>Informasi Akun</b>
                        </h5>
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password2" class="form-control" id="password2" placeholder="Konfirmasi Password">
                        </div>
                        <!-- Akhir Informasi Akun -->

                        <!-- Awal Prefensi Pengguna -->
                        <h5 class="title">
                            <b>Prefensi Pengguna</b>
                        </h5>

                        <select class="form-select" name="jenis_user" aria-label="Default select example">
                            <option selected>Pilih Prefensi Pengguna</option>
                            <option value="1">Pelajar</option>
                            <option value="2">Pelaku Usaha</option>
                            <option value="3">Aktivis Lingkungan</option>
                            <option value="4">Lainnya</option>
                        </select>

                        <!-- Awal Minat Utama -->
                        <h5 class="title">
                            <b>Minat Utama</b>
                        </h5>
                        <div class="form-check">
                            <input class="form-check-input" name="edukasi_iot" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Edukasi IoT
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="produk_ramah_lingkungan" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Marketplace Produk Ramah Lingkungan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="pelatihan_digital" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Pelatihan Digital
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="edukasi_ar" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Edukasi AR untuk Anak
                            </label>
                        </div>
                        <!-- Akhir Minat Utama -->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="daftar" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->