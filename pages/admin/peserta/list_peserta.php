<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style2.css">
    <title>Halaman Admin</title>
    <style>
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

        .btn-edit {
            background-color: #9b89f9;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
        }

        .btn-hapus {
            background-color: #ff5252;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
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
                <li><a href="../event/list_event.php">Data Webinar</a></li>
                <li><a href="list_peserta.php">Pendaftar</a></li>
                <li><a href="../pengguna/list_pengguna.php">Kelola akun</a></li>
            </ul>
            <!-- Tombol untuk Log In dan Sign Up -->
            <div class="auth-buttons">
                <button class="signup-btn">Logout</button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Tabel Webinar -->
        <section class="user-table">
            <h2>List Peserta Webinar</h2>
            <!-- Button Tambah -->
            <button class="btn-tambah" onclick="tambahWebinar()">Tambah Webinar</button>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Webinar Teknologi</td>
                        <td>Deskripsi singkat mengenai webinar teknologi</td>
                        <td>
                            <button class="btn-edit" onclick="editWebinar(1)">Edit</button>
                            <button class="btn-hapus" onclick="hapusWebinar(1)">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Webinar Bisnis</td>
                        <td>Deskripsi singkat mengenai webinar bisnis</td>
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
        function tambahWebinar() {
            alert('Form Tambah Webinar akan ditambahkan di sini!');
            // Di sini bisa ditambahkan kode untuk menampilkan form input webinar baru
        }
    </script>
</body>

</html>