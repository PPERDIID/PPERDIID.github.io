<?php
$koneksi = mysqli_connect("localhost","root","","digitallibrary");
if (mysqli_connect_errno()){
    echo "Gagal Melakukan Koneksi dengan Database" . mysqli_connect_error();
}
?>