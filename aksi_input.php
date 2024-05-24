<?php
include "class_data.php";

$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$kelas = $_POST['kelas'];

$dt = new siswa();

$dt->simpan_data($nama, $tgl, $kelas);
header("location:index.php");
