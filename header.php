<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/datatable-bootstrap.css" rel="stylesheet">
  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="tengah">
        <div class="head-depan tengah">
          <div class="row">
            <div class="col-md-1">
              <img class="img-responsive margin-b10" src="img/logo-logo.png" width="100" height="100" alt="Logo SMA Karangan" />
            </div>
            <div class="col-md-11">
              <h1 class="judul-head">Sistem Informasi Geografis Pemetaan Fasilitas Kesehatan di Kecamatan Lowokwaru Malang</h1>
              <p><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi yang memuat lokasi Fasilitas Kesehatan di Kecamatan Lowokwaru Malang</p>
            </div>
          </div>
          <hr class="hr1 margin-b-10" />
        </div>
      </div>
    </div>
  </div>
  <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Status</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php"><i class="fa fa-home"></i> HALAMAN DEPAN</a></li>
          <li><a href="data-user.php"><i class="fa fa-list-ul"></i> DATA JFASILITAS KESEHATAN</a></li>
          <li><a href="peta.php"><i class="fa fa-map-marker"></i> PETA PERSEBARAN FASILITAS KESEHATAN</a></li>
          <li><a href="login/login.html" data-toggle="modal" data-target=""><i class="fa fa-user"></i> LOGIN</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>