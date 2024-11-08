<?php
session_start();
include '../../koneksi/koneksi.php';

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'peserta') {
  header("Location: ../../index.php");
  exit();
}

// Ambil data user berdasarkan user_id di session
$user_id = $_SESSION['id'];
$query = "SELECT * FROM user WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran Webinar</title>
    <link rel="icon" type="image/x-icon" href="../../assets/images/logo (2).png" />
    <style>
      /* codingan alfira */
      @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      body {
        font-family: Manrope;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: auto;
        background-color: #f5f5f5;
      }
      .form-container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      }
      .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
      }

      form {
        padding: 10px;
      }
      .form-group {
        margin-bottom: 15px;
      }
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
      }
      input[type='text'],
      input[type='tel'],
      select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
      }
      input[name='nama'],
      input[name='alamat'],
      input[name='no_telp'] {
        width: 90%;
      }
      .form-group select {
        background-color: #fff;
        width: 100%;
      }
      .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #8c82fc;
        color: #ffffff;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .submit-btn:hover {
        background-color: #3e2b84;
      }

      .batal-btn {
        width: 100%;
        padding: 10px;
        background-color: red;
        color: #ffffff;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }

      .batal-btn:hover {
        background-color: burlywood;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h2>Pendaftaran Webinar</h2>
      <form action="../../proses/peserta/daftar_proses.php" method="POST">
        <!-- ini label nama -->
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="hidden" id="username" name="username" value="<?php echo $user['id'];   ?>" />
          <input type="text" id="nama" name="nama" required />
        </div>
        <!-- Ini label alamat -->
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" id="alamat" name="alamat" required />
        </div>
        <!-- Ini label no telepon -->
        <div class="form-group">
          <label for="no_telp">No. Telepon:</label>
          <input type="tel" id="no_telp" name="no_telp" required />
        </div>
        <!-- Ini label jenis kelamin -->
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin:</label>
          <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih</option>
            <option value="l">Laki-Laki</option>
            <option value="p">Perempuan</option>
          </select>
        </div>
        <!-- Ini label webinar yang dipilih -->
        <div class="form-group">
          <label for="webinar">Webinar yang Dipilih:</label>
          <select id="webinar" name="webinar" required>
          <option value="">Pilih Webinar</option>
            <?php
              $que = "SELECT id,judul FROM event";
              $kok = mysqli_query($conn,$que);

              while ($row = mysqli_fetch_assoc($kok)){

              
            ?>

            <option value="<?php echo $row['id'] ;?>"><?php echo $row['judul']; ?></option>
          <?php
              }
          ?>
          </select>

          
        </div>

        <button type="submit" name="submit" class="submit-btn">Daftar</button>
        <button type="button" onclick="window.location.href='index2.php';" class="batal-btn">Batal</button>
      </form>
    </div>
  </body>
</html>
