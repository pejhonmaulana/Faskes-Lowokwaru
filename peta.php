<?php
$title = "Peta Fasilitas Kesehatan Kecamatan Lowokwaru";
include_once "header.php";
?>

<div class="row">

  <div class="col-md-12">
    <div class="panel panel-info panel-dashboard centered">
      <div class="panel-heading">
        <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
      </div>
      <div class="panel-body">
        <div id="map" style="width:100%;height:380px;"></div>
        <script>
          var locations = [
            <?php
            $data = file_get_contents('http://localhost/gis-web/ambildata.php');
            $no = 1;
            if (json_decode($data, true)) {
              $obj = json_decode($data);
              foreach ($obj->results as $item) {
            ?>[
                  <?php echo $item->id_faskes ?>,
                  '<?php echo $item->nama_faskes ?>',
                  '<?php echo $item->alamat ?>',
                  '<?php echo $item->telepon ?>',
                  <?php echo $item->latitude ?>,
                  <?php echo $item->longitude ?>
                ],
            <?php
              }
            }
            ?>
          ];

          var map = L.map('map').setView([-7.949539511407199, 112.61580582060338], 14);
          mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
          L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
          }).addTo(map);
          for (var i = 0; i < locations.length; i++) {
            marker = new L.marker([locations[i][4], locations[i][5]])
              .bindPopup('<a href="detail.php?id_faskes=' + locations[i][0] + '">' + locations[i][1] + '</a>')
              .addTo(map);
          }
        </script>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php include_once "footer.php"; ?>