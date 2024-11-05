<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi database
include ('../../koneksi/koneksi.php');
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($conn, "SELECT * FROM pengguna WHERE
username='$username' AND PASSWORD='$password'");
// Memeriksa record data pada tabel admin
$cek = mysqli_num_rows($query);
if ($cek > 0) {
    $data = mysqli_fetch_array($query);
    if ($data['level'] == 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        $_SESSION['level'] = "admin";
        header("location:../../pages/admin/dashboard.php");
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        $_SESSION['level'] = "user";
        header("location: ../../pages/user/index2.php");
    }
} else {
    header("location:.. /login/register.php?pesan=gagal");
}   
