<?php
include "koneksipeminjaman.php";
include "navbar.php";

$queryData = "SELECT * FROM peminjaman";
$resultData = $koneksi->query($queryData);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laporan peminjaman buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <h2 class="mt-3"><b>Laporan Peminjaman Buku</b>
    </h2>

<!-- Tombol Cetak -->

<button onclick="cetakLaporan()" class="btn btn-outline-primary align-baseline">Cetak Laporan</button>

    <table>
        <tr>
            <th>ID Peminjaman</th>
            <th>ID User</th>
            <th>ID Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Pengembalian</th>
            <th>Aksi</th>
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

    <script>
    function cetaklaporan() {
        window.print(); // Mencetak halaman menggunakan fungsi print bawaan browser
    }
</script>


</body>

</html>
<?php
$koneksi->close();
?>
