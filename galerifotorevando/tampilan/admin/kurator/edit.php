<?php
$kurator = $koneksi->prepare('select *from kurator where id = "'.get('id').'"');
$kurator->execute();
$data_kurator = $kurator->fetch(PDO::FETCH_ASSOC);

$kurator_mapping = $koneksi->prepare('select *from users where id = "'.$data_kurator['user_id'].'"');
$kurator_mapping->execute();
$data_kurator_mapping = $kurator_mapping->fetch(PDO::FETCH_ASSOC);
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=kurator">Kurator</a></li>
          <li><a href="dashboard.php?p=kurator&m=edit&id=<?php echo $data_kurator['id']; ?>">Edit Kurator</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Edit Kurator</h2>
    </div>
  </div>
  <form action="proses/admin/kurator/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="kurator_id" value="<?php echo $data_kurator['id']; ?>">
    <input type="hidden" name="user_id" value="<?php echo $data_kurator_mapping['id']; ?>">
    <div class="row">
      <div class="col s12">
        <input type="text" name="nama" placeholder="Nama" class="input" required value="<?php echo $data_kurator['nama']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <input type="text" name="username" placeholder="Username" class="input" required value="<?php echo $data_kurator_mapping['username']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <textarea name="biodata" placeholder="Biodata" class="input" required><?php echo $data_kurator['biodata']; ?></textarea>
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
        <img src="assets/img/users/<?php echo $data_kurator['foto']; ?>" class="responsive-img">
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <a href="dashboard.php?p=kurator" class="btn red">Kembali</a>
        <button type="submit" class="btn">Simpan</button>
      </div>
    </div>
  </form>
</div>
