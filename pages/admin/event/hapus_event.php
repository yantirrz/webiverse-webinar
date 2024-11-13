<?php
// codingan arief ilham syahputra
include '../../../koneksi/koneksi.php';

// Pastikan ada parameter id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menyiapkan query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM event WHERE id = '$id'";

    // Menjalankan query dan memeriksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Event berhasil dihapus!');
                window.location.href = 'list_event.php';
              </script>";
    } else {
        echo "Terjadi kesalahan saat menghapus data: " . $conn->error;
    }
} else {
    echo "ID event tidak ditemukan!";
}
?>