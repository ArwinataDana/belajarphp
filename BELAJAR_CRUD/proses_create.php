<?php

include 'class_mhs.php';

$mahasiswa = new Mahasiswa();
$nama = $_POST['nama_mhs'];
$prodi = $_POST['prodi_mhs'];
$nim = $_POST['nim_mhs'];
$status = $_POST['sts_mhs'];

$create = $mahasiswa->create($nama, $prodi, $nim, $status);
echo $create;   

?>