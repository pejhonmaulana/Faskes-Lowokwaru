<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="tambah-data/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="tambah-data/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- tambah-data/Vendor CSS-->
    <link href="tambah-data/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="tambah-data/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="tambah-data/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Edit Data</h2>
                    <?php 
                        include "koneksi.php";
                        $id = @$_GET['id_faskes'];
                        $query_mysql = mysqli_query($koneksi,"SELECT * FROM faskes WHERE id_faskes='$id'");
                        //$nomor = 1;
                        while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                    <form action="aksi-edit.php" method="POST">
                        <div class="input-group">
                            <input type="hidden" name="id_faskes" value="<?php echo $data['id_faskes'] ?>">
                            <input class="input--style-1" type="text" placeholder="NAME" name="nama_faskes" value="<?php echo $data['nama_faskes']?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ALAMAT" name="alamat" value="<?php echo $data['alamat']?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NO TELEPON" name="telepon" value="<?php echo $data['telepon']?>" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="LATITUDE" name="latitude" value="<?php echo $data['latitude']?>" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="LONGTITUDE" name="longtitude" value="<?php echo $data['longitude']?>" >
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Edit</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="tambah-data/vendor/jquery/jquery.min.js"></script>
    <!-- tambah-data/Vendor JS-->
    <script src="tambah-data/vendor/select2/select2.min.js"></script>
    <script src="tambah-data/vendor/datepicker/moment.min.js"></script>
    <script src="tambah-data/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="tambah-data/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
