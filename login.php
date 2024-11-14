<!DOCTYPE html>
<!-- codingan ahmad rai fatkaozi -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets\images\logo (2).png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <script>
        // Script untuk menampilkan popup saat login gagal
        function showLoginError() {
            alert("Login gagal! Silakan periksa username dan password Anda.");
        }
    </script>
    <title>Form Login</title>
</head>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <form action="proses/auth/login_proses.php" method="POST"> <!-- Form untuk proses login -->
                    <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png"
                        alt="illustration" class="illustration" />
                    <h1 class="opacity">LOGIN</h1>
                    <form> <!-- Mulai form -->
                        <input type="text" name="username" id="username" placeholder="USERNAME" />
                        <!-- Input untuk username -->
                        <input type="password" name="password" id="password" placeholder="PASSWORD" />
                        <!-- Input untuk password -->
                        <button class="opacity" name="login">SUBMIT</button> <!-- Tombol submit -->
                        <center>
                            <p><i>Belum Punya Akun?</i></p>
                        </center> <!-- Pesan untuk pengguna yang belum memiliki akun -->
                    </form> <!-- Selesai form -->
                    <div class="register-forget opacity">
                        <a href="register.php">REGISTER</a> <!-- Link untuk menuju halaman registrasi -->
                    </div>
                </form>
                <?php
                // Tampilkan pesan popup jika terdapat parameter pesan=gagal di URL
                if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') {
                    echo "<script>showLoginError();</script>";
                }
                ?>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>

</html