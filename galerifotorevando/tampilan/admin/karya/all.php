<?php
$karya = $koneksi->prepare('select *from karya order by id desc');
$karya->execute();
$data_karya = $karya->fetchAll();
?>
<div class="row">
  <div class="col s12">
    <div class="breadcrumb">
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="dashboard.php?p=karya">Karya</a></li>
        <li><a href="dashboard.php?p=karya&m=all">Galeri Karya</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12">
    <h2>Galeri Karya</h2>
  </div>
</div>
<div class="row">
  <?php
  foreach ($data_karya as $data_karya_key => $data_karya_value) {
    $kategori = $koneksi->prepare('select *from kategori where id = "'.$data_karya_value['kategori_id'].'"');
    $kategori->execute();
    $data_kategori = $kategori->fetch(PDO::FETCH_ASSOC);
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
          <a href="dashboard.php?p=karya&m=kategori&id=<?php echo $data_kategori['id']; ?>" class="card-label">Kategori: <?php echo $data_kategori['nama'];  ?></a>
          <span class="card-label">Rate: <?php echo $data_karya_value['rate'];  ?></span>
        </div>
        <div class="card-title">
          <?php echo substr($data_karya_value['keterangan'],0,15); ?>...
        </div>
      </div>
      <div class="card-action">
        <a href="dashboard.php?p=karya&m=edit&id=<?php echo $data_karya_value['id']; ?>" class="btn">Edit</a>
        <a href="proses/admin/karya/delete.php?id=<?php echo $data_karya_value['id']; ?>" class="btn red" onclick="return confirm('Apakah anda yakin ingin menghapus <?php echo $data_karya_value['judul']; ?>?')">Hapus</a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>
