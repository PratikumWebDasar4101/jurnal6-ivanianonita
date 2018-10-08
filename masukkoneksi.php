<?php
require_once("koneksi6.php");

 
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$nim=$_POST['kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$hobi=$_POST['hobi'];
$fakultas=$_POST['fakultas'];
$alamat=$_POST['alamat'];

$sql="INSERT INTO pendaftaran (nim, nama, kelas, jenis_kelamin, hobi, fakultas, alamat) values ('$nim','$nama','$kelas','$jenis_kelamin','$hobi', '$fakultas', '$alamat')";

if(mysqli_query($conn,$sql)){
 header("Location:tampilku6.php");
}else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?> 