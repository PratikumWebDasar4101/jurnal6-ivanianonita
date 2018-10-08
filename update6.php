<?php
require_once("koneksi6.php");

$nim          = $_POST['nim'];
$nama         = $_POST['nama'];
$kelas         = $_POST['kelas'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$hobi    = $_POST['hobi'];
$fakultas   = $_POST['fakultas'];
$alamat    = $_POST['alamat'];


$sql= " UPDATE pendaftaran SET nim='$nama', kelas='$kelas',jenis_kelamin='$jenis_kelamin', hobi='$hobi', fakultas='$fakultas', alamat='$alamat" where nim='$nim'";
if(mysqli_query($conn, $sql)){
	header("Location:tampilku.php");
}else{
	echo "Error :".$sql."<br>". mysql_error($conn);
}


?>