<?php
$title = "Daftar Fasilitas Kesehatan";
include_once "header.php";
include_once "koneksi.php"; ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
      </div>
      <div class="panel-body">
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