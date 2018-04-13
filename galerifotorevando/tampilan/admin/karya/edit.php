<?php
$karya = $koneksi->prepare('select *from karya where id = "'.get('id').'"');
$karya->execute();
$data_karya = $karya->fetch(PDO::FETCH_ASSOC);

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
          <li><a href="dashboard.php?p=karya&m=edit&id=<?php echo $data_karya['id']; ?>">Edit Karya</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Edit Karya</h2>
    </div>
  </div>
  <form action="proses/admin/karya/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data_karya['id']; ?>">
    <div class="row">
      <div class="col s12">
        <input type="text" name="judul" placeholder="Judul" class="input" required value="<?php echo $data_karya['judul']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <textarea name="keterangan" placeholder="Keterangan" class="input" required><?php echo $data_karya['keterangan']; ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <label>Kategori</label>
        <select name="kategori_id">
          <?php
          foreach ($data_kategori as $data_kategori_key => $data_kategori_value) {
          ?>
          <option value="<?php echo $data_kategori_value['id']; ?>" <?php if($data_karya['kategori_id']==$data_kategori_value['id']){ echo 'selected'; } ?>><?php echo $data_kategori_value['nama']; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <label>Foto</label>
        <input type="file" name="foto">
      </div>
    </div>
    <div class="row">
      <div class="col s3">
        <img src="assets/img/karya/<?php echo $data_karya['foto']; ?>">
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
