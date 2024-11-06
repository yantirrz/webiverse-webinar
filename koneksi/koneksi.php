<?php
$hostname = "localhost";
$username = "root";
$pass = "";
$db = "webinar";

$conn = mysqli_connect($hostname, $username, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
