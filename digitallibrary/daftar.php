<!DOCTYPE html>
<html>
    <head>
        <title>FORM DAFTAR APLIKASI PERPUSTAKAAN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="card mt-5 mb-5">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <img src="asset/img/register.png" width="600" class="center">
                        </div>
                        <div class="col-sm-6">
                            <div class="card-body mt-2">
                                <h5 class="text-center">Lengkapi Informasi dibawah Untuk Mendaftarkan Akun</b></h5>
                                <hr>
                                <form method="post" action="proses_daftar.php">

                                    <div class="form-floating mt-5">
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="Username">
                                        <label for="Username">Username</label>
                                    </div>

                                    <div class="form-floating mt-2">
                                        <input type="password" placeholder="Password" name="Password" class="form-control">
                                        <label for="Password">Password</label>
                                    </div>

                                    
                                    <div class="form-floating group mt-2">
                                    <input type="text" class="form-control" placeholder="yourname@example.com" name="Email" aria-describedby="basic-addon">
                                    <label for="Email">Alamat Email</label>
                                    </div>
                                   
                                    <div class="form-floating mt-2">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="NamaLengkap">
                                    <label for="NamaLengkap">Nama Lengkap</label>
                                    </div>

                                    <div class="form-floating mt-2">
                                    <input type="text" class="form-control" placeholder="Alamat" name="Alamat">
                                    <label for="Alamat">Alamat</label>
                                    </div>

                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-outline-primary">DAFTAR</button>
                                    </div>
                                    
                                    <div class="form-gropu mt-3">
                                        <label>Sudah Punya Akun?</label>
                                        <a href="index.php" class="btn btn-outline-success btn-sm">LOGIN</a>
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