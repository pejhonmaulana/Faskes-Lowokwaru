<?php 
include 'koneksi.php';
$id_faskes = $_POST['id_faskes'];
$nama = $_POST['nama_faskes'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
 
mysqli_query($koneksi,"UPDATE faskes SET nama_faskes='$nama', alamat='$alamat', telepon='$telepon', latitude='$latitude', longitude='$longitude' WHERE id_faskes='$id_faskes'");
 
header("location:data.php?pesan=update");
?>