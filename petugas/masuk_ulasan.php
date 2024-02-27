<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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