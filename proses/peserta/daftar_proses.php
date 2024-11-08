<?php

session_start();
include '../../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $webinar_id = $_POST['webinar'];
    
    $query = "INSERT INTO pendaftar VALUES ('','$username', '$nama', '$alamat', '$no_telp', '$jenis_kelamin', $webinar_id)";

    if (mysqli_query($conn,$query)) {
        echo "<script>alert('Pendaftaran berhasil!'); window.location.href = '../../pages/user/index2.php';</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal! Silakan coba lagi.'); window.location.href = '../../pages/user/index2.php';</script>";
    }

}
