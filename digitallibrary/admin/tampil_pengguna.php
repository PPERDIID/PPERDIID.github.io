<!DOCTYPE html>
<html lang="id">
<?php
include "koneksi.php";
include "navbar.php";

$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query);
$Username = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($koneksi);
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PENGGUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    

            
</head>
<body>
   

    <h2 class="mt-3"><b>Daftar Pengguna Aplikasi Perpustakaan</b></h2>
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
    ?>
     <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: ;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
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

        <tr class="">
            <th>User ID</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>e-Mail</th>
            <th>Alamat</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($Username as $user) : ?>
            <div class="body-card mt-3">
            <tr>
                <td><?=$user['UserID']?></td>
                <td><?= $user['Username']; ?></td>
                <td><?= $user['NamaLengkap']; ?></td>
                <td><?= $user['Email']; ?></td>
                <td><?= $user['Alamat']; ?></td>
                <td><?= $user['Level']; ?></td>
                <td><a href="hapus_user.php" class="btn btn-outline-danger">HAPUS</a></td>
            </tr>
            </div>
        <?php endforeach; ?>
    </table>
        
</body>
</html>
