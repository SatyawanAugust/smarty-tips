<?php
$hostName	= "localhost";
$username	= "root";
$password	= "";
$dbName		= "dbpj";

$connect = mysqli_connect($hostName,$username,$password,$dbName);

if ($connect){
	echo "KONEKSI BERHASIL";
}
else{
	echo "KONEKSI GAGAL";
}
?>