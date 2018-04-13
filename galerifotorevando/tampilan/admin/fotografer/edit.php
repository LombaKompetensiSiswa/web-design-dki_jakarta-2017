<?php
$fotografer = $koneksi->prepare('select *from fotografer where id = "'.get('id').'"');
$fotografer->execute();
$data_fotografer = $fotografer->fetch(PDO::FETCH_ASSOC);

$fotografer_mapping = $koneksi->prepare('select *from users where id = "'.$data_fotografer['user_id'].'"');
$fotografer_mapping->execute();
$data_fotografer_mapping = $fotografer_mapping->fetch(PDO::FETCH_ASSOC);
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=fotografer">Fotografer</a></li>
          <li><a href="dashboard.php?p=fotografer&m=edit&id=<?php echo $data_fotografer['id']; ?>">Edit Fotografer</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Edit Fotografer</h2>
    </div>
  </div>
  <form action="proses/admin/fotografer/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="fotografer_id" value="<?php echo $data_fotografer['id']; ?>">
    <input type="hidden" name="user_id" value="<?php echo $data_fotografer_mapping['id']; ?>">
    <div class="row">
      <div class="col s12">
        <input type="text" name="nama" placeholder="Nama" class="input" required value="<?php echo $data_fotografer['nama']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <input type="text" name="username" placeholder="Username" class="input" required value="<?php echo $data_fotografer_mapping['username']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <textarea name="biodata" placeholder="Biodata" class="input" required><?php echo $data_fotografer['biodata']; ?></textarea>
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
        <img src="assets/img/users/<?php echo $data_fotografer['foto']; ?>" class="responsive-img">
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
