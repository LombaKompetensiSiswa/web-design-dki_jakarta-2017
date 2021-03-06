<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=fotografer">Fotografer</a></li>
          <li><a href="dashboard.php?p=fotografer&m=add">Tambah Fotografer</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Tambah Fotografer</h2>
    </div>
  </div>
  <form action="proses/admin/fotografer/save.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col s12">
        <input type="text" name="nama" placeholder="Nama" class="input" required>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <input type="text" name="username" placeholder="Username" class="input" required>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <textarea name="biodata" placeholder="Biodata" class="input" required></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" class="input" required>
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
        <a href="dashboard.php?p=fotografer" class="btn red">Kembali</a>
        <button type="submit" class="btn">Simpan</button>
      </div>
    </div>
  </form>
</div>
