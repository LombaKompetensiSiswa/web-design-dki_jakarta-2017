<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=kategori">Kategori</a></li>
          <li><a href="dashboard.php?p=kategori&m=add">Tambah Kategori</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Tambah Kategori</h2>
    </div>
  </div>
  <form action="proses/admin/kategori/save.php" method="post">
  <div class="row">
    <div class="col s12">
      <input type="text" name="nama" class="input" placeholder="Nama" required>
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
