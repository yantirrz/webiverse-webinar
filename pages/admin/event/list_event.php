<?php
include '../../../koneksi/koneksi.php';
session_start();

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../../../index.php");
    exit();
}

// Fetch events from the database
$sql = "SELECT * FROM event";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing the query: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style2.css">
    <link rel="icon" type="image/x-icon" href="../../../assets/images/logo (2).png" />
    <title>Halaman Admin</title>
    <style>
        /* Reset default margin/padding */
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and main content styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        /* Header styles */
        .navbar {
            width: 100%;
            background-color: #fff;
            margin: auto;
        }

        /* style  untuk container utama */
        .nav-wrapper {
            max-width: 88%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        /* style  untuk logo dan teks di navbar */
        .logo {
            display: flex;
            align-items: center;
        }

        /* style  untuk gambar logo */
        .logo img {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }

        /* style  teks untuk logo */
        .logo span {
            font-weight: bold;
            color: #333;
            font-size: 20px;
        }

        /* style  untuk daftar menu navbar */
        .navbar ul {
            list-style: none;
            display: flex;
            gap: 24px;
            margin: 0;
            padding: 0;
        }

        /* style  untuk tautan dalam navbar */
        .navbar ul li a {
            text-decoration: none;
            color: #333;
        }

        auth-buttons .signup-btn {
            background: none;
            color: #fff;
        }

        /* User table styles */
        .user-table {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .user-table h2 {
            text-align: center;
            color: #5451bb;
            margin-bottom: 20px;
        }

        .btn-tambah {
            background-color: #9b89f9;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
            margin-left:0;
        }

        .user-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .user-table th,
        .user-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .user-table th {
            background-color: #f0f0f0;
        }

        .actions-btn {
            display: flex;
        }

        .btn-edit {
            background-color: #9b89f9;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-left:8px;
        }

        .btn-hapus {
            background-color: #ff5252;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-top:4px ;
            margin-left:8px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="navbar">
        <div class="nav-wrapper">
            <div class="logo">
                <img src="..\..\..\assets\images/logo (2).png" alt="Logo WebiVerse" />
                <span>WebiVerse</span>
            </div>
            <!-- Daftar menu navigasi -->
            <ul>
                <li><a href="../dashboard.php">Home</a></li>
                <li><a href="list_event.php">Data Webinar</a></li>
                <li><a href="../peserta/list_peserta.php">Pendaftar</a></li>
                <li><a href="../pengguna/list_pengguna.php">Kelola akun</a></li>
            </ul>
            <!-- Tombol untuk Log In dan Sign Up -->
            <div class="auth-buttons">
                <button class="signup-btn"><a href="../../../proses/auth/logout_proses.php">Logout</a></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Tabel Pengguna -->
        <section class="user-table">
            <h2>Data Webinar</h2>
            <!-- Button Tambah -->
            <button class="btn-tambah" "><a href=" tambah_event.php">Tambah Webinar</a></button>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($event = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $event['id']; ?></td>
                        <td><?php echo $event['judul']; ?></td>
                        <td><?php echo $event['deskripsi']; ?></td>
                        <td><img src="../../../assets/gambar/<?php echo $event['gambar']; ?>" alt="Gambar Webinar" width="50" height="50"></td>
                        <td><?php echo $event['tanggal']; ?></td>
                        <td><?php echo $event['jam']; ?> WIB</td>
                        <td><?php echo $event['jenis']; ?></td>
                        <td class="action-btn d-flex">
                            <button class="btn-edit" onclick="window.location.href= 'edit_event.php?id=<?php echo $event['id']; ?>'">Edit</button>
                            <button class="btn-hapus"><a href="hapus_event.php?id=<?php echo $event['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')">Hapus</a></button>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </main>


</body>

</html>