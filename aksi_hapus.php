<?php
include "class_data.php";

$id = $_GET['id'];


$dt = new siswa();

$dt->hapus_data($id);
header("location:index.php");
