<?php
// codingan ahmad rai fatkaozi
include '../../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result)) {
        
            echo "<script>
                alert('Username Telah Digunakan!');
                window.location.href = '../../register.php';
                </script>";
            
        } else {

            $query_insert = "INSERT INTO user (username, password, role) VALUES ('$username', '$password', '$role')";
           

            if(mysqli_query($conn,$query_insert)){
                echo "<script>
                alert('Pendaftaran sebagai user berhasil!');
                window.location.href = '../../login.php';
                </script>";
            } else {
                 echo "Gagal registrasi sebagai user";
            }
        }

}


