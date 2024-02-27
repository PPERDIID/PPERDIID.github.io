<?php
session_start();
include 'koneksi.php';

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

$login = mysqli_query($koneksi, "SELECT * FROM User WHERE Username='$Username' AND Password='$Password'" );
$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);

	if($data['Level']=="Admin"){
		$_SESSION['Username'] = $Username;
		$_SESSION['Level'] = "Admin";
		header("location:admin/index.php");

    }else if($data['Level']=="Petugas"){
        $_SESSION['Username'] = $Username;
		$_SESSION['Level'] = "Petugas";
		header("location:petugas/index.php");
    
    }else if($data['Level']=="Pengguna"){
        $_SESSION['Username'] = $Username;
		$_SESSION['Level'] = "Pengguna";
		header("location:Peminjam/index.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}
    ?>