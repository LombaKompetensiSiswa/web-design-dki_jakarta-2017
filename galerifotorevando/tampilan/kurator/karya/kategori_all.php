<?php
$kategori = $koneksi->prepare('select *from kategori where id = "'.get('id').'"');
$kategori->execute();
$data_kategori = $kategori->fetch(PDO::FETCH_ASSOC);

$karya = $koneksi->prepare('select *from karya where kategori_id = "'.get('id').'" order by id desc');
$karya->execute();
$data_karya = $karya->fetchAll();
?>
<div class="row">
  <div class="col s12">
    <div class="breadcrumb">
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="dashboard.php?p=karya">Karya</a></li>
        <li><a href="dashboard.php?p=karya&m=kategori&id=<?php echo $data_kategori['id']; ?>">Kategori <?php echo $data_kategori['nama']; ?></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12">
    <h2>Galeri Karya pada Kategori <?php echo $data_kategori['nama']; ?></h2>
  </div>
</div>
<div class="row">
  <?php
  foreach ($data_karya as $data_karya_key => $data_karya_value) {
    $count_rate = $koneksi->prepare('select *from rate where karya_id = "'.$data_karya_value['id'].'" and kurator_id = "'.$data_user_mapping['id'].'"');
    $count_rate->execute();
    $data_count_rate = $count_rate->fetchAll();
  ?>
  <div class="col s-card">
    <div class="card">
      <div class="card-img">
        <a href="dashboard.php?p=karya&m=detail&id=<?php echo $data_karya_value['id']; ?>" class="card-img-content">
          <img src="assets/img/karya/<?php echo $data_karya_value['foto']; ?>">
        </a>
      </div>
      <div class="card-content">
        <div class="card-title">
          <a href="dashboard.php?p=karya&m=detail&id=<?php echo $data_karya_value['id']; ?>"><?php echo $data_karya_value['judul']; ?></a>
        </div>
        <div class="card-category">
          <a href="dashboard.php?p=karya&m=kategori&id=<?php echo $data_kategori['id']; ?>" class="card-label"><?php echo $data_kategori['nama'];  ?></a>
        </div>
      </div>
      <?php
      if (count($data_count_rate)==0) {
      ?>
      <div class="card-action">
        <a href="dashboard.php?p=karya&m=rate&id=<?php echo $data_karya_value['id']; ?>" class="btn">Beri Rating</a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php
  }
  ?>
</div>
