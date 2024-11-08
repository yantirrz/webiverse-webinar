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

        /* Button Print */
        .btn-print {
            padding: 10px 20px;
            background-color: #9b59b6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .btn-print:hover {
            background-color: #8e44ad;
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
