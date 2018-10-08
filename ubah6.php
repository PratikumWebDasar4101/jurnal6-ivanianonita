<?php
require_once("koneksi6.php");

$id=$_GET['nim'];

$query=mysqli_query($conn,"select * from pendaftaran where nim='$nim'");
$row=mysqli_fetch_array($query);

function acive_radio_button($value,$input){
	$result = $input==$result?'checked':'';
	return $result;
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
	<table>
	<form action="update6.php" method="POST">
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['nama']; ?>" name="nim"></td>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" value="<?php echo $row['nim']; ?>" name="kelas"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" value="<?php echo $row['tgl_lahir']; ?>" name="jenis_kelamin"></td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" value="<?php echo $row['tgl_lahir']; ?>" name="hobi"></td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['tgl_lahir']; ?>" name="fakultas"></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" value="<?php echo $row['tgl_lahir']; ?>" name="alamat"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</form>
</table>

</body>
</html>