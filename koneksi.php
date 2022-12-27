<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "db_gis";

$koneksi = mysqli_connect($host, $user, $pass, $name);
// or die("Koneksi ke database gagal!")
//mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
