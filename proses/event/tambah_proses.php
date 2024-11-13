<?php
// codingan athaullah abrar bayan
include '../../koneksi/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $gambar = $_FILES["gambar"]["name"];
    $tanggal = $_POST["tanggal"];
    $jam = $_POST["jam"];
    $jenis = $_POST["jenis"];

    // Memindahkan file gambar ke direktori ../../assets/gambar
    $target_dir = "../../assets/gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    // Menyiapkan pernyataan SQL untuk memasukkan data ke database
    $sql = "INSERT INTO event (judul, deskripsi, gambar, tanggal, jam, jenis)
            VALUES ('$judul', '$deskripsi', '$gambar', '$tanggal', '$jam', '$jenis')";

    // Menjalankan query dan memeriksa keberhasilannya
    if ($conn->query($sql) === TRUE) {
        echo "Data acara berhasil disimpan.";
        header("Location: ../../pages/admin/event/list_event.php");
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . $conn->error;
    }
}