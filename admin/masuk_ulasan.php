<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                        <div class="container text-center">
		    <div class="content mt-3">
				<div class="card bg-primary bg-gradient">
					<div class="card-body">
						<a href="http://localhost/digitallibrary/peminjam/index.php" class="btn btn-primary bg-gradient btn-sm text-light">Halaman Utama</a>
						<a href="http://localhost/digitallibrary/peminjam/kategoribuku.php" class="btn btn-primary bg-gradient btn-sm text-light">Kategori Buku</a>
						<a href="http://localhost/digitallibrary/peminjam/tampil_buku.php" class="btn btn-primary bg-gradient btn-sm text-light">Daftar Buku</a>
						<a href="http://localhost/digitallibrary/peminjam/form_peminjaman.php/" class="btn btn-primary bg-gradient btn-sm text-light">Lakukan Peminjaman</a>
						<a href="http://localhost/digitallibrary/admin/masuk_ulasan.php/" class="btn btn-primary bg-gradient btn-sm text-light">Beri Ulasan</a>
						<a href="../logout.php" class="btn btn-outline-warning">LOG OUT</a>
                    </div>
                </div>
            </div>
</head>
<body>
</html><form method="post" action="proses_tambah_ulasan.php">
    <div class="form-group mt-2">
            <label><b>Berikan Ulasanmu</b></label><br>
            <textarea type="text" name="Ulasan" class="form-control mt-2" placeholder="Berikan pendapatmu tentang buku disini..." rows="4" name="Ulasan"></textarea>
    </div>
    <div class="form-group mt-2">
            <label><b>ID Buku
            <input type="text" class="form-control" placeholder="ID Buku yang ingin kamu ulas" name="BukuID">
    </div>
    <div class="form-group mt-2">
            <label><b>ID User
            <input type="text" class="form-control" placeholder="ID Buku yang ingin kamu ulas" name="UserID">
    </div>
    <div class="form-group mt-3">
            <button type="submit" class="btn btn-outline-success">KIRIM</button>
    </div>
</form>
</body>
</html>