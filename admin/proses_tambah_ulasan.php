<?php
include "koneksi.php";

$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$Ulasan = $_POST['Ulasan'];

mysqli_query($koneksi, "INSERT INTO ulasanbuku VALUES('','$UserID','$BukuID','$Ulasan','5')");
header("location:masuk_ulasan.php?pesan=info_sukses");

?>