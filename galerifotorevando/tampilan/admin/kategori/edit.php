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
          <li><a href="dashboard.php?p=kategori&m=edit&id=<?php echo $data_kategori['id']; ?>">Edit Kategori</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Edit Kategori</h2>
    </div>
  </div>
  <form action="proses/admin/kategori/update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $data_kategori['id']; ?>">
  <div class="row">
    <div class="col s12">
      <input type="text" name="nama" class="input" placeholder="Nama" required value="<?php echo $data_kategori['nama']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=kategori" class="btn red">Kembali</a>
      <button type="submit" class="btn">Simpan</button>
    </div>
  </div>
</form>
</div>
