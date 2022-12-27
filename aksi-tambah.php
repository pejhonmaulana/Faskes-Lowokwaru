<?php 
include 'koneksi.php';
$nama_faskes = $_POST['nama_faskes'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];
 
mysqli_query($koneksi,"INSERT INTO faskes VALUES('','$nama_faskes','$alamat','$telepon','$latitude','$longtitude')");
 
header("location:data.php?pesan=input");
?>