<?php
$kategori = $koneksi->prepare('select *from kategori where id = "'.get('id').'"');
$kategori->execute();
$data_kategori = $kategori->fetch(PDO::FETCH_ASSOC);
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=kategori">Kategori</a></li>
          <li><a href="dashboard.php?p=kategori&m=detail&id=<?php echo $data_kategori['id']; ?>">Detail Kategori</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Detail Kategori</h2>
    </div>
  </div>
  <div class="row">
    <div class="col s3">
      Nama
    </div>
    <div class="col s9">
      <?php echo $data_kategori['nama']; ?>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=kategori" class="btn red">Kembali</a>
    </div>
  </div>
</div>
