<?php
include "koneksipeminjaman.php";
include "navbar.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserID = $_POST["UserID"];
    $BukuID = $_POST["BukuID"];
    $TanggalPeminjaman = $_POST["TanggalPeminjaman"];
    $TanggalPengembalian = $_POST["TanggalPengembalian"];
    $StatusPeminjaman = "belum dikembalikan"; // Default status

    $query = $koneksi->prepare("INSERT INTO peminjaman (UserID, BukuID, TanggalPeminjaman, TanggalPengembalian, StatusPeminjaman)
                                VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("iisss", $UserID, $BukuID, $TanggalPeminjaman, $TanggalPengembalian, $StatusPeminjaman);

    if ($query->execute()) {
        echo "Data berhasil dimasukkan ke dalam database.";
    } else {
        echo "Error: " . $query->error;
    }

    $query->close();
}

$queryData = "SELECT * FROM peminjaman";
$resultData = $koneksi->query($queryData);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil peminjaman buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <h2 class="text-center mt-3 mb-3"><b>Form Peminjaman Buku</b></h2>
    <div class="container text-center">
        <div class="content mt-1">
            <div class="row justify-text-center">
                <div class="card">
                    <div class="row justify-text-center">
                        </div>
                        <div class="col-sm">
                            <div class="card-body"> 
                                <h5 class="text-center text-success"><b>Baca Buku Apa Hari Ini?</b></h5>
                                <hr>
                                <form method="post" action="proses_peminjaman.php">
                                    <div class="form-group mt-2">
                                        <label><b>User ID</ label></b><br>
                                        <input type="text" name="UserID" class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><b>Buku ID</  label></b>
                                        <input type="text" name="BukuID" class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><b>Tanggal Peminjaman</ label></b>
                                        <input type="DATE" name="TanggalPeminjaman" class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><b>Tanggal Pengembalian</ label></b>
                                        <input type="DATE" name="TanggalPengembalian" class="form-control">
                                    </div>
                                    </div>
                                    <div class="form-grup mb-5">
                                        <button type="submit" class="btn btn-primary">PINJAM BUKU</button>
                                    </div>                                  
                                    </div>
                                  
                                    
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=="sukses_tambah"){
        echo "<div class='alert alert-success'>Berhasil Meminjam Buku</div>";
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


    <table>
        <tr>
            <th>ID Peminjaman</th>
            <th>ID User</th>
            <th>ID Buku</th>
            <th>Tanngal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Pengembalian</th>
        </tr>
        <?php
        if ($resultData->num_rows > 0) {
            while ($row = $resultData->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["PeminjamanID"] . "</td>";
                echo "<td>" . $row["UserID"] . "</td>";
                echo "<td>" . $row["BukuID"] . "</td>";
                echo "<td>" . $row["TanggalPeminjaman"] . "</td>";
                echo "<td>" . $row["TanggalPengembalian"] . "</td>";
                echo "<td>" . $row["StatusPeminjaman"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>tidak ada data peminjaman.</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
$koneksi->close();
?>
