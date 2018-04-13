<?php
$kontak = $koneksi->prepare('select *from kontak where id = "'.get('id').'"');
$kontak->execute();
$data_kontak = $kontak->fetch(PDO::FETCH_ASSOC);
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=kontak">Kontak</a></li>
          <li><a href="dashboard.php?p=kontak&m=detail&id=<?php echo $data_kontak['id']; ?>">Detail Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Detail Kontak</h2>
    </div>
  </div>
  <div class="row">
    <div class="col s3">
      Nama
    </div>
    <div class="col s9">
      <?php echo $data_kontak['nama']; ?>
    </div>
  </div>
  <div class="row">
    <div class="col s3">
      Judul Pesan
    </div>
    <div class="col s9">
      <?php echo $data_kontak['judul_pesan']; ?>
    </div>
  </div>
  <div class="row">
    <div class="col s3">
      Isi Pesan
    </div>
    <div class="col s9">
      <?php echo $data_kontak['isi_pesan']; ?>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=kontak" class="btn red">Kembali</a>
    </div>
  </div>
</div>
