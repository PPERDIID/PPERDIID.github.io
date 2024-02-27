<?php
$host = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda (biasanya "root" di XAMPP)
$password = ""; // Biarkan kosong jika tidak ada password
$database = "digitallibrary"; // Ganti dengan nama database Anda

$koneksi2 = mysqli_connect($host, $username, $password, $database);

if (!$koneksi2) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>