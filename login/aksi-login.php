<?php 
include '../koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
header("location: ../data.php")
?>