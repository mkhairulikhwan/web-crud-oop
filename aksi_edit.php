<?php
include "class_data.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$kelas = $_POST['kelas'];

$dt = new siswa();

$dt->edit_data($id, $nama, $tgl, $kelas);
header("location:index.php");
