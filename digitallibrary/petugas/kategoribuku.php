<!DOCTYPE html>
<html lang="id">
<?php
include "koneksi.php";
include "navbar.php";

$query = "SELECT * FROM kategoribuku";
$result = mysqli_query($koneksi, $query);
$KategoriBuku = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
<form method="post" action="proses_tambah_kategori.php">
    <div class="form-group mt-2">
            <label><b>Tambah Kategori Baru</b><br>
                    <input type="text" name="NamaKategori" class="form-control">
    </div>
            <div class="form-group mt-3">
            <button type="submit" class="btn btn-outline-success">TAMBAH</button>
</div>
</form>

    <h2 class="mt-4"><b>Daftar Kategori Buku Perpustakaan</b></h2>
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
			                            echo "<div class='alert alert-success mt-3'>Berhasil Menambah Kategori</div>";
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
            margin-top: 30px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 2px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {    
            background-color: #4CAF50;
            color: white;
            opacity: 70;
        }
    </style>

        <tr class="mt-3">
            <th>ID Kategori</th>
            <th>Kategori Buku</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($KategoriBuku as $kategori) : ?>
            <div class="body-card mt-3">
            <tr>
                <td><?= $kategori['KategoriID']; ?></td>
                <td><?= $kategori['NamaKategori']; ?></td>
                <td><a href="hapus_kategori.php" class="btn btn-outline-danger">HAPUS</a></td>
            </tr>
            </div>
        <?php endforeach; ?>
    </table>
        
</body>
</html>
