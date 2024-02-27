<!DOCTYPE html>
<html lang="id">
<?php
include "koneksi.php";
include "navbar.php";

$query = "SELECT * FROM buku";
$result = mysqli_query($koneksi, $query);
$dataBuku = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($koneksi);
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    

            
</head>
<body>

    <h2 class="mt-3"><b>Daftar Buku Perpustakaan</b></h2>
    <body style="font-family: 'Arial', sans-serif; background-color: #f4f4f4; margin: 0; 
    padding: 20px; display: flex; flex-direction: column; align-items: center;">
    <table style="width: 80%; border-collapse: bold; margin-top: 20px; background-color: white; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin: 0 auto;">
     <?php
         if(isset($_GET['pesan'])){
            if($_GET['pesan']=="hapus_data"){
                echo "<div class='alert alert-danger mt-3'>Fitur Belum Tersedia, Error Terus :') Hapus Dari Database aja ya~</div>";
            }
        }

                                if(isset($_GET['pesan'])){
		                            if($_GET['pesan']=="info_tambah"){
			                            echo "<div class='alert alert-success mt-3'>Berhasil Menyimpan Buku</div>";
		                            }
	                            }
	                            ?>
     <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
            opacity: 50;
        }
    </style>

        <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($dataBuku as $buku) : ?>
            <div class="body-card mt-3">
            <tr>
                <td><?= $buku['BukuID']; ?></td>
                <td><?= $buku['Judul']; ?></td>
                <td><?= $buku['Penulis']; ?></td>
                <td><?= $buku['Penerbit']; ?></td>
                <td><?= $buku['TahunTerbit']; ?></td>
                <td><a href="hapus_buku.php" class="btn btn-outline-danger">HAPUS</a></td>
            </tr>
            </div>
        <?php endforeach; ?>
    </table>
        
</body>
</html>
