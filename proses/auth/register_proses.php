<?php
include '../../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    if ($role == 'admin') {
        $query = "INSERT INTO user (username, password, role) VALUES ('$username', '$password',' '$role')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Pendaftaran sebagai admin berhasil!');</script>";
            header('location:../../login.php');
        } else {
            echo "Gagal registrasi sebagai admin";
        }
    } else {
        $query = "INSERT INTO user (username, password, role) VALUES ('$username', '$password', '$role')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Pendaftaran sebagai user berhasil!');</script>";
            header('location:../../login.php');
        } else {
            echo "Gagal registrasi sebagai user";
        }
    }
}


