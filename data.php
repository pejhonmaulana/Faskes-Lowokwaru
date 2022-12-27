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
          <li><a href="data.php"><i class="fa fa-list-ul"></i> DATA JFASILITAS KESEHATAN</a></li>
          <li><a href="peta.php"><i class="fa fa-map-marker"></i> PETA PERSEBARAN FASILITAS KESEHATAN</a></li>
          <li><a href="login/aksi-logout.php" data-toggle="modal" data-target=""><i class="fa fa-user"></i> LOGOUT</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <?php
    $title = "Daftar Fasilitas Kesehatan";
    include_once "koneksi.php"; ?>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
          </div>
          <div class="panel-body">
            <a href="tambah-data/tambah-data.html"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="25%">Nama Fasilitas Kesehatan</th>
                  <th width="25%">Alamat</th>
                  <th width="15%">No. Telepon</th>
                  <th width="10%">Latitude</th>
                  <th width="10%">Longitude</th>
                  <th width="20%">Lokasi</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $data = file_get_contents('http://localhost/gis-web/ambildata.php');
                $no = 1;
                if (json_decode($data, true)) {
                  $obj = json_decode($data);
                  foreach ($obj->results as $item) {
                ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $item->nama_faskes; ?></td>
                      <td><?php echo $item->alamat; ?></td>
                      <td><?php echo $item->telepon; ?></td>
                      <td><?php echo $item->latitude; ?></td>
                      <td><?php echo $item->longitude; ?></td>
                      <td class="ctr">
                        <div class="btn-group">
                          <a target="_blank" href="detail.php?id_faskes=<?php echo $item->id_faskes; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                            <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                        </div>
                      </td>
                      <td class="aksi">
                        <div class="btn-group">
                          <a href="edit-data.php?id_faskes=<?php echo $item->id_faskes; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                          <a href="delete.php?id_faskes=<?php echo $item->id_faskes; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                        </div>
                      </td>
                    </tr>
                <?php $no++;
                  }
                } else {
                  echo "data tidak ada.";
                } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php include_once "footer.php" ?>