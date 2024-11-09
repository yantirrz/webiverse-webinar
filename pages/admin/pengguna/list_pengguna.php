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
            color: #5451bb;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-tambah,
        .btn-print {
            background-color: #9b89f9;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
            margin: 0 5px 10px 5px
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
                <li><a href="../peserta/list_peserta.php">Pendaftar</a></li>
                <li><a href="list_pengguna.php">Kelola akun</a></li>
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
            <h2>Data Pengguna</h2>
            <!-- Button Tambah -->
            <button class="btn-tambah" onclick="tambahPengguna()">Tambah Pengguna</button>
            <!-- Button Print -->
            <button class="btn-print" onclick="printTable()">Print Tabel</button>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No.Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Event</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>Non-Aktif</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <script>
        // Fungsi untuk menambah pengguna
        function tambahPengguna() {
            alert('Form Tambah Pengguna akan ditambahkan di sini!');
        }

        // Fungsi untuk mencetak tabel
        function printTable() {
            const content = document.querySelector('table').outerHTML;
            const printWindow = window.open('', '', 'height=500, width=800');
            printWindow.document.write('<html><head><title>Print Tabel</title></head><body>');
            printWindow.document.write(content);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>

</body>

</html>