<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
        <div class="content mt-1">
            <div class="row justify-text-center">
                <div class="card">
                    <div class="row justify-text-center">
                        </div>
                        <div class="col-sm">
                            <div class="card-body"> 
                                <h5 class="text-center text-success"><b>Tambahkan Buku Baru</b></h5>
                                <hr>
                                <form method="post" action="proses_tambah_buku.php">
                                    <div class="form-group mt-2">
                                        <label>Judul Buku</  label><br>
                                        <input type="text" name="Judul" class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Penulis</  label>
                                        <input type="text" name="Penulis" class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Penerbit</  label>
                                        <input type="text" name="Penerbit" class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Tahun Terbit</  label>
                                        <input type="number" name="TahunTerbit" class="form-control">
                                    </div>
                                    </div>
                                    <div class="form-grup mb-5">
                                        <button type="submit" class="btn btn-outline-primary">TAMBAH BUKU</button>
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
</body>
</html>