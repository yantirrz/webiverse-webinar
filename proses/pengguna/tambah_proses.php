<?php
include '../../koneksi/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Menyiapkan pernyataan SQL untuk memasukkan data ke database
    $sql = "INSERT INTO user (username, password, role)
            VALUES ('$username', '$password', '$role')";

    // Menjalankan query dan memeriksa keberhasilannya
    if ($conn->query($sql) === TRUE) {
        echo "Data Pengguna berhasil disimpan.";
        header("Location: ../../pages/admin/pengguna/list_pengguna.php");
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . $conn->error;
    }
}