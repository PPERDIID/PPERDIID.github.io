<?php 
	session_start();
    include 'navbar.php';
    include 'koneksi.php';
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Admin</title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>
        <body>
        
			<div class="content mt-3">
				<div class="row">
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body bg-primary bg-gradient bg-opacity-75 text-center">
								<h3 class="text-light">Data Buku</h3>
                                <hr>
                                <h7 class="text-light">Jumlah Buku Saat Ini</h7>
								<h3 class="text-warning"><b> <?php $sql = "SELECT * FROM buku";
                                if ($result = mysqli_query($koneksi, $sql)) {
                                $rowcount = mysqli_num_rows($result);
                                printf($rowcount);
                                }
                                 ?></b></h3>
								<hr>
								<a href="tampil_buku.php" class="btn btn-outline-dark">lihat data</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
						<div class="card">
							<div class="card-body bg-primary bg-gradient bg-opacity-75 text-center">
								<h3 class="text-light">Data Kategori Buku</h3>
                                <hr>
								<h7 class="text-light">Jumlah Kategori Buku Saat Ini</h7>
								<h3 class="text-warning"><b> <?php $sql = "SELECT * FROM kategoribuku";
                                if ($result = mysqli_query($koneksi, $sql)) {
                                $rowcount = mysqli_num_rows($result);
                                printf($rowcount);
                                }
                                 ?></b></h3>
								
								<hr>
								<a href="kategoribuku.php" class="btn btn-outline-dark">Lihat Data</a>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body bg-primary bg-gradient bg-opacity-75 text-center">
								<h3 class="text-light">Data Pengguna</h3>
                                <hr>
								<h7 class="text-light">Jumlah Pengguna Saat Ini</h7>

								<h3 class="text-warning"><b> <?php $sql = "SELECT * FROM user";
                                if ($result = mysqli_query($koneksi, $sql)) {
                                $rowcount = mysqli_num_rows($result);
                                printf($rowcount);
                                }
                                ?></b></h3>


                                <hr>
								<a href="../petugas/tampil_pengguna.php" class="btn btn-outline-dark">lihat data</a>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-3">
						<div class="card">
							<div class="card-body bg-primary bg-gradient bg-opacity-75 text-center">
								<h3 class="text-light">Data Peminjaman</h3>
                                <hr>
								<h7 class="text-light">Jumlah Peminjaman Saat Ini</h7>
								<h3 class="text-warning"><b> <?php $sql = "SELECT * FROM peminjaman";
                                if ($result = mysqli_query($koneksi, $sql)) {
                                $rowcount = mysqli_num_rows($result);
                                printf($rowcount);
                                }
                                 ?></b></h3>
								
								<hr>
								<a href="http://localhost/digitallibrary/petugas/laporan_peminjaman.php/" class="btn btn-outline-dark">lihat data</a>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div> <br>
			<?php 
                                if(isset($_GET['pesan'])){
		                            if($_GET['pesan']=="khusus_admin"){
			                            echo "<div class='alert alert-warning'>Fitur ini Khusus Admin!</div>";
		                            }
	                            }
	                            ?>
            
			<div class="content mt-3">
				<div class="card">
					<div class="card-body">
						<p>Selamat Datang, <b><?php echo $_SESSION['Username']; ?></b> Anda kini telah login sebagai <b>
							<?php echo $_SESSION['Level']; ?></b>.</p>
                    </div>
                </div>
            </div>
			<div class="content mt-3">
			    <p class="text-center">@2024 Aplikasi Perpustakaan Digital</p>
				<p class="text-center"><b>By Herpilanus Verdi XII RPL</b></p>
        </div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        </body>
        </html>