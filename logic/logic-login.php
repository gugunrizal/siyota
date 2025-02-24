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
session_start();
include("conn.php");

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);
    $data = mysqli_fetch_array($result);

    if ($data) {
        $_SESSION['username'] = $data['username'];
        echo "<script> 
        Swal.fire({
            icon: 'success',
            title: 'Selamat...',
            text: 'Selamat Anda Berhasil Login'
        }).then(function() {
            window.location = '../home.php';
        });
        </script>";
    } else {
        echo "<script> 
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Username / Password Salah'
        }).then(function() {
            window.location = '../login.php';
        });
        </script>";
    }
}

$conn->close();

?>