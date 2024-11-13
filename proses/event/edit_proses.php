<?php
// codingan athaullah abrar bayan
include '../../koneksi/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $id = $_GET['id'];  // ID event yang akan diedit
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $tanggal = $_POST["tanggal"];
    $jam = $_POST["jam"];
    $jenis = $_POST["jenis"];
    
    // Menangani file gambar baru
    if ($_FILES["gambar"]["name"]) {
        // Jika ada gambar baru
        $gambar = $_FILES["gambar"]["name"];
        $target_dir = "../../assets/gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    } else {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $gambar = $_POST["gambar_lama"];
    }

    // Menyiapkan pernyataan SQL untuk mengupdate data event
    $sql = "UPDATE event 
            SET judul = '$judul', deskripsi = '$deskripsi', gambar = '$gambar', tanggal = '$tanggal', jam = '$jam', jenis = '$jenis' 
            WHERE id = '$id'";

    // Menjalankan query dan memeriksa keberhasilannya
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Event berhasil diperbarui!');
                window.location.href = '../../pages/admin/event/list_event.php';
              </script>";
    } else {
        echo "Terjadi kesalahan saat mengupdate data: " . $conn->error;
    }
}
?>
