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

if (isset($_POST["simpan"])) {

    $id = $_POST['id_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nope = $_POST['nope'];
    $kategori = $_POST['kategori'];
    // $lampiran = $_POST['lampiran_pendukung'];
    $tanggal = $_POST['tanggal_upload'];
    $lokasi = $_POST['lokasi'];
    $laporan = $_POST['laporan'];

    $ekstensi_diperbolehkan = array('png', 'jpg', 'pdf', 'docx');
    $lampiran = $_FILES['lampiran_pendukung']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['lampiran_pendukung']['size'];
    $file_tmp = $_FILES['lampiran_pendukung']['tmp_name'];

    $sql_user = "UPDATE tb_user SET nama='$nama', email='$email', no_hp='$nope' WHERE id='$id'";
    $result_user = mysqli_query($conn, $sql_user);

    $sql_report = "INSERT INTO tb_report (id_user, kategori_laporan, lampiran_pendukung, tanggal_upload, lokasi, deskripsi) VALUES ('$id', '$kategori', '$lampiran', '$tanggal', '$lokasi', '$laporan')";

    if ($result_user) {
        if ($ekstensi && $ekstensi_diperbolehkan) {
            if ($ukuran < 1044070) {
                move_uploaded_file($file_tmp, '../lampiran-report/' . $lampiran);
                $result = mysqli_query($conn, $sql_report);
                if ($result) {
                    echo "<script> 
                        Swal.fire({
                        icon: 'success',
                        title: 'Selamat...',
                        text: 'Selamat Laporan Berhasil disimpan'
                    }).then(function() {
                        window.location = '../report.php';
                    });
                    </script>";
                } else {
                    echo "<script> 
                        Swal.fire({
                        icon: 'error',
                        title: 'Maaf...',
                        text: 'Maaf Laporan Gagal disimpan'
                    }).then(function() {
                        window.location = '../report.php';
                    });
                    </script>";
                }
            } else {
                echo "<script> 
                    Swal.fire({
                    icon: 'error',
                    title: 'Maaf...',
                    text: 'Ukuran File Terlalu Besar'
                }).then(function() {
                    window.location = '../report.php';
                });
                </script>";
            }
        } else {
            echo "<script> 
                Swal.fire({
                icon: 'error',
                title: 'Maaf...',
                text: 'Ekstensi File yang diupload tidak diperbolehkan'
            }).then(function() {
                window.location = '../report.php';
            });
            </script>";
        }
    }
}
