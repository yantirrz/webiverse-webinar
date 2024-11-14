<?php
// codingan ahmad rai fatkaozi
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi database
include ('../../koneksi/koneksi.php');
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($conn, "SELECT * FROM user WHERE
username='$username' AND PASSWORD='$password'");
// Memeriksa record data pada tabel admin
$cek = mysqli_num_rows($query);
if ($cek > 0) {
    $data = mysqli_fetch_array($query);
    // session yang dibuat ketika sudah login
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['role'] = $data['role'];
    if ($data['role'] == 'admin') {
        header("location:../../pages/admin/dashboard.php");
    } else {
        header("location: ../../pages/user/index2.php");
    }
} else {
    header("location:../../login.php?pesan=gagal");
}   

