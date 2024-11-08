<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style2.css">
    <title>Halaman Admin</title>
    <style>
        /* Reset default margin/padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #f4f7fc;
            flex-direction: column; /* Pastikan konten diatur dalam kolom */
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            margin-top: -340px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 25%;
            text-align: center;
        }

        .card h3 {
            font-size: 20px;
            color: #333;
        }

        .card p {
            font-size: 28px;
            color: #3498db;
            font-weight: bold;
        }

        .user-table h2 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #3498db;
            color: white;
        }

        table td button {
            padding: 6px 12px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
        }

        table td button:hover {
            background-color: #27ae60;
        }

        /* Button tambah */
        .btn-tambah {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .btn-tambah:hover {
            background-color: #2980b9;
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Data Webinar</a></li>
                <li><a href="#">Pendaftar</a></li>
                <li><a href="/jadwal.php">Kelola akun</a></li>
            </ul>
            <!-- Tombol untuk Log In dan Sign Up -->
            <div class="auth-buttons">
                <button class="signup-btn">Logout</button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Tabel Pengguna -->
        <section class="user-table">
            <h2>Data Webinar</h2>
            <!-- Button Tambah -->
            <button class="btn-tambah" onclick="tambahPengguna()">Tambah Webinar</button>

            <table>
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
                    <tr>
                        <td>1</td>
                        <td>Webinar Teknologi</td>
                        <td>Deskripsi singkat mengenai webinar teknologi</td>
                        <td><img src="path/to/image1.jpg" alt="Gambar Webinar 1" width="50" height="50"></td>
                        <td>2024-11-10</td>
                        <td>10:00</td>
                        <td>Online</td>
                        <td>
                            <button class="btn-edit" onclick="editWebinar(1)">Edit</button>
                            <button class="btn-hapus" onclick="hapusWebinar(1)">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Webinar Bisnis</td>
                        <td>Deskripsi singkat mengenai webinar bisnis</td>
                        <td><img src="path/to/image2.jpg" alt="Gambar Webinar 2" width="50" height="50"></td>
                        <td>2024-11-15</td>
                        <td>14:00</td>
                        <td>Offline</td>
                        <td>
                            <button class="btn-edit" onclick="editWebinar(2)">Edit</button>
                            <button class="btn-hapus" onclick="hapusWebinar(2)">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <script>
        // Fungsi untuk mengedit data webinar
        function editWebinar(id) {
            alert('Fungsi Edit untuk Webinar ID: ' + id + ' akan ditambahkan di sini!');
        }

        // Fungsi untuk menghapus data webinar
        function hapusWebinar(id) {
            if (confirm('Apakah Anda yakin ingin menghapus Webinar ID: ' + id + '?')) {
                alert('Webinar ID: ' + id + ' telah dihapus.');
                // Di sini bisa ditambahkan kode untuk menghapus data webinar dari tabel atau database
            }
        }

        // Fungsi untuk menambah webinar
        function tambahPengguna() {
            alert('Form Tambah Webinar akan ditambahkan di sini!');
            // Di sini bisa ditambahkan kode untuk menampilkan form input webinar baru
        }
    </script>

</body>

</html>
