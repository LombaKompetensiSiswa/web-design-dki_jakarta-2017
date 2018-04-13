<?php
$kurator = $koneksi->prepare('select *from kurator where id = "'.get('id').'"');
$kurator->execute();
$data_kurator = $kurator->fetch(PDO::FETCH_ASSOC);
?>
<section class="grey">
  <div class="guest-container">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="index.php">Halaman Awal</a></li>
          <li><a href="index.php?p=kurator">Kurator</a></li>
          <li><a href="index.php?p=kurator&m=detail&id=<?php echo $data_kurator['id']; ?>">Detail Kurator</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <div class="card-panel">
        <div class="row">
          <div class="col s12">
            <h2><?php echo $data_kurator['nama']; ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col s3">
            <img src="assets/img/users/<?php echo $data_kurator['foto']; ?>" class="circle" width="200" height="200">
          </div>
          <div class="col s9">
            <div class="row">
              <div class="col s4">
                Nama
              </div>
              <div class="col s8">
                <?php echo $data_kurator['nama']; ?>
              </div>
            </div>
            <div class="row">
              <div class="col s4">
                Biodata
              </div>
              <div class="col s8">
                <?php echo $data_kurator['biodata']; ?>
              </div>
            </div>
            <div class="row">
              <div class="col s4">
                Akses
              </div>
              <div class="col s8">
                Kurator
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
