<?php
$server_name = "localhost";
  $user_name = "root";
  $password = "";
  $db_name = "digitallibrary";
  $peminjamanid = "PeminjamanID";
// Create connection
  $link = new mysqli($server_name, $user_name, $password, $db_name);

// Check connection
  if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
  }
// sql to delete a record
  $sql = "UPDATE peminjaman SET StatusPeminjaman='Sudah_Dikembalikan' WHERE Peminjaman=$peminjamanid";

if ($link->query($sql) === TRUE) {
  echo "Record updated successfully";
  } else {  
  echo "Error updated record: " . $link->error;
  }

$link->close();
  ?>