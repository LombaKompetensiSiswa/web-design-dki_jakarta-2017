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
          <li><a href="dashboard.php?p=kontak&m=edit&id=<?php echo $data_kontak['id']; ?>">Edit Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Edit Kontak</h2>
    </div>
  </div>
  <form action="proses/admin/kontak/update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data_kontak['id']; ?>">
    <div class="row">
      <div class="col s12">
        <input type="text" name="nama" value="<?php echo $data_kontak['nama']; ?>" class="input" required>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <input type="text" name="judul_pesan" value="<?php echo $data_kontak['judul_pesan']; ?>" class="input" required>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <textarea name="isi_pesan" class="input" required><?php echo $data_kontak['isi_pesan']; ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <a href="dashboard.php?p=kontak" class="btn red">Kembali</a>
        <button type="submit" class="btn">Simpan</button>
      </div>
    </div>
  </form>
</div>
