<?php
$id = $_GET['id_faskes'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles = "";
$id_faskes = "";
$alamat = "";
$telepon = "";
$lat = "";
$long = "";
foreach ($obj->results as $item) {
  $titles .= $item->nama_faskes;
  $id_faskes .= $item->id_faskes;
  $alamat .= $item->alamat;
  $telepon .= $item->telepon;
  $lat .= $item->latitude;
  $long .= $item->longitude;
}

$title = "Detail dan Lokasi " . $titles;
include_once "header.php"; ?>

<div class="row">
  <div class="col-md-5">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
      </div>
      <div class="panel-body">
        <div id="map" style="width:100%;height:380px;">
          <script>
            var map = L.map('map').setView([<?php echo $lat ?>, <?php echo $long  ?>], 14);
            mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; ' + mapLink + ' Contributors',
              maxZoom: 18,
            }).addTo(map);
            var marker = L.marker([<?php echo $lat ?>, <?php echo $long ?>]).addTo(map);
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Detail - </strong></h4>
      </div>
      <div class="panel-body">
        <table class="table">
          <tr>
            <th>Item</th>
            <th>Detail</th>
          </tr>
          <tr>
            <td>Nama Fasilitas Kesehatan</td>
            <td>
              <h4><?php echo $titles ?></h4>
            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>
              <h4><?php echo $alamat ?></h4>
            </td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td>
              <h4><?php echo $telepon ?></h4>
            </td>
          </tr>
          <tr>
            <td>Latitude</td>
            <td>
              <h4><?php echo $lat ?></h4>
            </td>
          </tr>
          <tr>
            <td>Longitude</td>
            <td>
              <h4><?php echo $long ?></h4>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>


</div>
</div>
</div>
<?php include_once "footer.php"; ?>