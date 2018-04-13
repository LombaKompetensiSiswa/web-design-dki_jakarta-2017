<?php
$kurator = $koneksi->prepare('select *from kurator where id = "'.get('id').'"');
$kurator->execute();
$data_kurator = $kurator->fetch(PDO::FETCH_ASSOC);

$kurator_mapping = $koneksi->prepare('select *from users where id = "'.$data_kurator['user_id'].'"');
$kurator_mapping->execute();
$data_kurator_mapping = $kurator_mapping->fetch(PDO::FETCH_ASSOC);
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=kurator">Kurator</a></li>
          <li><a href="dashboard.php?p=kurator&m=detail&id=<?php echo $data_kurator['id']; ?>">Detail Kurator</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2><?php echo $data_kurator['nama']; ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col s4">
      <img src="assets/img/users/<?php echo $data_kurator['foto']; ?>" class="circle" width="200" height="200">
    </div>
    <div class="col s8">
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
          Username
        </div>
        <div class="col s8">
          <?php echo $data_kurator_mapping['username']; ?>
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
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=kurator" class="btn red">Kembali</a>
    </div>
  </div>
</div>
