<!DOCTYPE html>
<html>
    <head>
        <title>FORM LOGIN APLIKASI PERPUSTAKAAN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="card mt-5 mb-5">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <img src="asset/img/login.png" width="600">
                        </div>
                        <div class="col-sm-6">
                            <div class="card-body mt-2">
                                <b><h5 class="text-center" >Masukkan Username & Password untuk Login</h5></b>
                                <hr>
                                <form method="post" action="cek_login.php">
                                <div class="form-floating mt-5">
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="Username">
                                        <label for="Username">Username</label>
                                    </div>

                                    <div class="form-floating mt-2">
                                        <input type="password" placeholder="Password" name="Password" class="form-control">
                                        <label for="Password">Password</label>
                                    </div>
                                    <div class="form-grup mt-3">
                                        <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                    </div>
                                    <div class="form-grup mt-3">
                                        <label>Belum Punya Akun?‎ ‎ ‎ </label>
                                        <a href="daftar.php" class="btn btn-outline-success">Daftar Sekarang</a> <br><br>    
                                        <?php 
	                            if(isset($_GET['pesan'])){
		                            if($_GET['pesan']=="gagal"){
			                            echo "<div class='alert alert-danger'>Username dan Password tidak ditemukan, silahkan mendaftar akun terlebih dahulu</div>";
		                            }
	                            }
                                if(isset($_GET['pesan'])){
		                            if($_GET['pesan']=="info_login"){
			                            echo "<div class='alert alert-info'>Anda Belum Login</div>";
		                            }
	                            }
                                if(isset($_GET['pesan'])){
		                            if($_GET['pesan']=="info_logout"){
			                            echo "<div class='alert alert-danger'>Berhasil Logout</div>";
		                            }
	                            }
                                if(isset($_GET['pesan'])){
		                            if($_GET['pesan']=="info_daftar"){
			                            echo "<div class='alert alert-success'>Berhasil Membuat Akun, Silahkan Login</div>";
		                            }
	                            }
	                            ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>