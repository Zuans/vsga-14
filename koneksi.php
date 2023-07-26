<?php

$server = "localhost";
$user = "root";
$password = "";
$dbName = "daftar_siswa_vsga";

// all table name
$siswaTb = 'siswa';



$db = mysqli_connect($server, $user, $password, $dbName);
if(!$db) {
  die("Gagal terhubung dengan db" . mysqli_connect_error());
}


?>