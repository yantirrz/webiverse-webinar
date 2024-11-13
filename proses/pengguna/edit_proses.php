<?php
// codingan athaullah abrar bayan
include '../../koneksi/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Menyiapkan pernyataan SQL untuk memasukkan data ke database
    $sql = "UPDATE user set username ='$username', password = '$password', role = '$role' 
            WHERE id = '$id'";

    // Menjalankan query dan memeriksa keberhasilannya
    if ($conn->query($sql) === TRUE) {
        echo "Data Pengguna berhasil diubah.";
        header("Location: ../../pages/admin/pengguna/list_pengguna.php");
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . $conn->error;
    }
}