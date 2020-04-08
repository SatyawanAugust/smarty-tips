<?php
$hostName	= "localhost";
$username	= "root";
$password	= "";
$dbName		= "dbforum";

$connect = mysqli_connect($hostName,$username,$password,$dbName);

$sqlKategori = mysqli_query($connect, "SELECT * FROM as_frm_categories");

// hitung jumlah data
$nums = mysqli_num_rows($sqlKategori);

echo "<b>Jumlah Data : ".$nums ."</b><br>";
while ($dataKategori = mysqli_fetch_array($sqlKategori)){
	echo "$dataKategori[category_name]<br>";
}
?>