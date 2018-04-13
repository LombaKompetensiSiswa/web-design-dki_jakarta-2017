<?php
$kategori = $koneksi->prepare('select *from kategori order by id desc');
$kategori->execute();
$data_kategori = $kategori->fetchAll();
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=karya">Karya</a></li>
          <li><a href="dashboard.php?p=karya&m=add">Upload Karya</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Upload Karya</h2>
    </div>
  </div>
  <form action="proses/anggota/karya/save.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="fotografer_id" value="<?php echo $data_user_mapping['id']; ?>">
    <div class="row">
      <div class="col s12">
        <input type="text" name="judul" placeholder="Judul" class="input" required>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <textarea name="keterangan" placeholder="Keterangan" class="input" required></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <label>Kategori</label>
        <select name="kategori_id">
          <?php
          foreach ($data_kategori as $data_kategori_key => $data_kategori_value) {
          ?>
          <option value="<?php echo $data_kategori_value['id']; ?>"><?php echo $data_kategori_value['nama']; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <label>Foto</label>
        <input type="file" name="foto" required>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <a href="dashboard.php?p=karya" class="btn red">Kembali</a>
        <button type="submit" class="btn">Simpan</button>
      </div>
    </div>
  </form>
</div>
