<?php
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

echo json_encode(array($nip, $nama, $jabatan));

exit();
?>