<!-- codingan arief ilham syahputra -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../assets/images/logo (2).png" />
    <title>TAMBAH WEBINAR</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        box-sizing: border-box;
        margin: 0px;
        padding: 0;

    }

    body {
        /* font-family: Arial, sans-serif; */
        font-family: Manrope;
        background-color: #fff;
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


    a {
        text-decoration: none;
        color: white;
    }

    /* bagian cinta */
    /*style  untuk navbar atau bagian header */
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

    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        box-sizing: border-box;
        margin: 0px;
        padding: 0;
    }

    body {
        font-family: Manrope;
        background-color: #fff;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .container {
        max-width: 50%;
        height: fit-content;
        margin: auto;
        padding: 50px 0;
    }

    form {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 30px;
    }

    label {
        display: block;
        font-size: 16px;
        color: #333;
        margin-bottom: 8px;
    }

    input,
    textarea,
    select {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        margin-bottom: 20px;
    }

    button {
        display: block;
        margin: 0 auto;
        padding: 12px 24px;
        background-color: #9b89f9;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #3e2b84;
    }
</style>

<body>
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
    <div class="container">

        <form action="../../../proses/event/tambah_proses.php" method="POST" enctype="multipart/form-data">
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" required></textarea>

            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" required>

            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="jam">Jam:</label>
            <input type="time" id="jam" name="jam" required>

            <label for="jenis">Jenis:</label>
            <input type="text" id="jenis" name="jenis" value="zoom" readonly>

            <button type="submit" onclick="tambahWebinar()">Simpan</button>
        </form>
    </div>
</body>
<script>
    function tambahWebinar() {
        alert('Webinar berhasil ditambahkan!');
        // Di sini bisa ditambahkan kode untuk menampilkan form input webinar baru
    }</script>

</html>