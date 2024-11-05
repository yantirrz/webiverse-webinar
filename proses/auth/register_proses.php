<?php
include '../../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $level = $_POST['level'];
    if ($level == 'admin') {
        $query = "INSERT INTO pengguna (username, password, nama_lengkap, level) VALUES ('$username', '$password','$nama_lengkap', '$level')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Pendaftaran sebagai admin berhasil!');</script>";
            header('location:../../login/login.php');
        } else {
            echo "Gagal registrasi sebagai admin";
        }
    } else {
        $query = "INSERT INTO pengguna (username, password, nama_lengkap, level) VALUES ('$username', '$password', '$nama_lengkap', '$level')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Pendaftaran sebagai user berhasil!');</script>";
            header('location:../../login/login.php');
        } else {
            echo "Gagal registrasi sebagai user";
        }
    }
}

