<?php
include "koneksipeminjam.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserID = $_POST["UserID"];
    $BukuID = $_POST["BukuID"];
    $TanggalPeminjaman = $_POST["TanggalPeminjaman"];
    $TanggalPengembalian = $_POST["TanggalPengembalian"];
    $StatusPengembalian = "belum dikembalikan"; // Default status

    $query = $koneksi->prepare("INSERT INTO peminjaman (UserID, BukuID, TanggalPeminjaman, TanggalPengembalian, StatusPengembalian)
                                VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("iisss", $UserID, $BukuID, $TanggalPeminjaman, $TanggalPengembalian, $StatusPengembalian);

    if ($query->execute()) {
        echo "Berhasil Meminjam Buku, Selamat Membaca!";
    } else {
        echo "Error: " . $query->error;
    }

    $query->close();
}

$koneksi->close();
exit();
?>
