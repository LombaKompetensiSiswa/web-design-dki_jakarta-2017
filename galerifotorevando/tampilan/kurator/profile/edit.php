<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=profile">Profile</a></li>
          <li><a href="dashboard.php?p=profile&m=edit">Edit Profile</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Edit Profile</h2>
    </div>
  </div>
  <form action="proses/kurator/profile/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?php echo $data_user['id']; ?>">
    <input type="hidden" name="mapping_id" value="<?php echo $data_user_mapping['id']; ?>">
    <div class="row">
      <div class="col s12">
        <input type="text" name="nama" placeholder="Nama" class="input" required value="<?php echo $data_user_mapping['nama']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <input type="text" name="username" placeholder="Username" class="input" required value="<?php echo $data_user['username']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <textarea name="biodata" placeholder="Biodata" class="input" required><?php echo $data_user_mapping['biodata']; ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <label>Password (Isi jika ingin diganti.)</label>
        <input type="password" name="password" placeholder="Password" class="input">
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
        <img src="assets/img/users/<?php echo $data_user_mapping['foto']; ?>" class="responsive-img">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <a href="dashboard.php?p=profile" class="btn red">Kembali</a>
        <button type="submit" class="btn">Simpan</button>
      </div>
    </div>
  </form>
</div>
