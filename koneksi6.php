<?php

$server="localhost";
$user="root";
$password="";
$db_name="jurnal6";

$conn = mysqli_connect($server,$user,$password,$db_name);

if(!$conn){
	echo "Error:" . mysqli_connect_error();
	exit();
}else{
	echo 'connected to MySQL';
}






?>