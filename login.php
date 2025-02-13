<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YETC | Login</title>
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
        <div class="row my-4 justify-content-md-center">
            <div class="col-12 col-md-8">
                <div class="card my-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <img src="assets/images/logo-1.png" alt="" width="20%" class="rounded mx-auto d-block">
                        <h1 class="card-title text-center text-success"><strong>Login Akun</strong></h1>
                        <hr>
                        <p class="card-text">
                        <form method="POST" action="logic/logic-login.php">
                            <div class="row justify-content-md-center">
                                <div class="col-12 col-md-10">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email address</label>
                                        <input type="text" name="username" class="form-control" id="username" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-12 col-md-10">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" required>
                                </div>
                            </div>
                            <div class="row justify-content-md-center my-3">
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button type="submit" class="btn btn-success" name="login">Login</button>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-12 col-md-8 text-center">
                                    <p class="text-success">Belum punya akun? <a href="register.php" class="text-success"><strong>Klik Disini</strong></a></p>
                                </div>
                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>