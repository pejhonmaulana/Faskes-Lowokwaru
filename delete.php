<?php
    include 'koneksi.php';
    $id_faskes = $_GET['id_faskes'];
    mysqli_query($koneksi,"DELETE FROM faskes WHERE id_faskes='$id_faskes'");
     
    header("location:data.php?pesan=hapus");

?>