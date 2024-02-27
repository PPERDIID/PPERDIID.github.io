<?php
include "koneksi.php";

$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];

mysqli_query($koneksi, "INSERT INTO kategoribuku VALUES('','$NamaKategori')");
header("location:kategoribuku.php?pesan=info_tambah");

?>