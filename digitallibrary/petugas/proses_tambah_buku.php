<?php
include "koneksi.php";

$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];

mysqli_query($koneksi, "INSERT INTO buku VALUES('','$Judul','$Penulis','$Penerbit','$TahunTerbit')");
header("location:tampil_buku.php?pesan=info_tambah");

?>