<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php

include("conn.php");

if (isset($_POST['daftar'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nope = $_POST['nope'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jenis_user = $_POST['jenis_user'];
    $minat_user = $_POST['minat_user'];
    $info = $_POST['info'];
    $peminatan = "";

    foreach ($minat_user as $minat) {
        $peminatan .= $minat . ",";
    }

    $sql = "INSERT INTO tb_user (nama, username, password, alamat, email, no_hp, jenis_user, minat_user, info) VALUES ('$nama', '$username', '$password', '$alamat', '$email', '$nope', '$jenis_user', '$peminatan', '$info')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script> 
        Swal.fire({
        icon: 'success',
        title: 'Selamat...',
        text: 'Selamat Data User Berhasil disimpan'
    }).then(function() {
        window.location = '../login.php';
    });
    </script>";
    } else {
        echo "<script> 
    Swal.fire({
        icon: 'error',
        title: 'Maaf...',
        text: 'Data Gagal disimpan'
    }).then(function() {
        window.location = '../register.php';
    });
    </script>";
    }
}
