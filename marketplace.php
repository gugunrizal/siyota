<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background-color: #0a6b4a;
        border-radius: 15px;
    }

    .summary-produk {
        background-color: #0a516b;
        border-radius: 15px;
    }

    .no-decoration {
        text-decoration: none;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark warna1">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-4" href="index.php">Home</a>
                    </li>
                    <li class=nav-item>
                        <a class="nav-link me-4" href="tentang-kami.php">Tentang Kami</a>
                    </li>
                    <li class=nav-item>
                        <a class="nav-link me-4" href="produk.php">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Toko Online Fashion</h1>
            <h3>Mau Cari Apa?</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna2 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Baju Pria">Baju Pria</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-tas-wanita d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Tas Wanita">Tas Wanita</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-sepatu-pria d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Sepatu Pria">Sepatu Pria</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid warna3 py-5">
        <div class="container">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente tempore minus omnis eum non cum aut? Libero, iure beatae quos ipsum, cupiditate porro esse odit quia, consequuntur quas laboriosam sequi?</p>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
                <?php while ($data = mysqli_fetch_array($queryProduk)) { ?>
                    <div class="col-sm-6 col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="image-box">
                                <img class="card-img-top" src="image/<?php echo $data['foto']; ?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $data['nama'] ?></h4>
                                <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                                <p class="card-text text-harga">Rp <?php echo $data['harga'] ?></p>
                                <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 text-white">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a class="btn btn-outline-warning mt-3 p-2 fs-3" href="produk.php">See More</a>
        </div>
    </div>

    <div class="container-fluid py-5 content-subscribe text-light">
        <div class="container">
            <h5 class="text-center mb-4">Temui Kami</h5>
            <div class="row justify-content-center">
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a href="http://facebook.com"><i class="fab fa-facebook fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a href="http://instagram.com"><i class="fab fa-instagram fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a href="http://twitter.com"><i class="fab fa-twitter fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a href="http://youtube.com"><i class="fab fa-youtube fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a href="http://whatsapp.com"><i class="fab fa-whatsapp fs-2"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 bg-dark text-light">
        <div class="container d-flex justify-content-between">
            <label>&copy;2021 Kafe Saya</label>
            <label>Created by Cara Fajar</label>
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