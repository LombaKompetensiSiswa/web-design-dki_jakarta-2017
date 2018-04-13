<?php
$fotografer = $koneksi->prepare('select *from fotografer where id = "'.get('id').'"');
$fotografer->execute();
$data_fotografer = $fotografer->fetch(PDO::FETCH_ASSOC);

$fotografer_mapping = $koneksi->prepare('select *from users where id = "'.$data_fotografer['user_id'].'"');
$fotografer_mapping->execute();
$data_fotografer_mapping = $fotografer_mapping->fetch(PDO::FETCH_ASSOC);
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=fotografer">Fotografer</a></li>
          <li><a href="dashboard.php?p=fotografer&m=detail&id=<?php echo $data_fotografer['id']; ?>">Detail Fotografer</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2><?php echo $data_fotografer['nama']; ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col s4">
      <img src="assets/img/users/<?php echo $data_fotografer['foto']; ?>" class="circle" width="200" height="200">
    </div>
    <div class="col s8">
      <div class="row">
        <div class="col s4">
          Nama
        </div>
        <div class="col s8">
          <?php echo $data_fotografer['nama']; ?>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          Username
        </div>
        <div class="col s8">
          <?php echo $data_fotografer_mapping['username']; ?>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          Biodata
        </div>
        <div class="col s8">
          <?php echo $data_fotografer['biodata']; ?>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          Akses
        </div>
        <div class="col s8">
          Fotografer
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=fotografer" class="btn red">Kembali</a>
    </div>
  </div>
</div>
