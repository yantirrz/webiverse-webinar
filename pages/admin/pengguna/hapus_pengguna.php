<?php
include '../../../koneksi/koneksi.php';

// Pastikan ada parameter id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menyiapkan query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM user WHERE id = '$id'";

    // Menjalankan query dan memeriksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Pengguna berhasil dihapus!');
                window.location.href = 'list_pengguna.php';
              </script>";
    } else {
        echo "Terjadi kesalahan saat menghapus data: " . $conn->error;
    }
} else {
    echo "ID Pengguna tidak ditemukan!";
}
?>