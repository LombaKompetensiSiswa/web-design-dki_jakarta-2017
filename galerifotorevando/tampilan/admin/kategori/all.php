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
          <li><a href="dashboard.php?p=kategori">Kategori</a></li>
          <li><a href="dashboard.php?p=kategori&m=all">Daftar Kategori</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Daftar Kategori</h2>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=kategori&m=add" class="btn">Tambah Kategori</a>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tindakan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data_kategori as $data_kategori_key => $data_kategori_value) {
          ?>
          <tr>
            <td><?php echo $no++; ?>.</td>
            <td><a href="dashboard.php?p=kategori&m=detail&id=<?php echo $data_kategori_value['id']; ?>" class="link-text"><?php echo $data_kategori_value['nama']; ?></a></td>
            <td>
              <a href="dashboard.php?p=kategori&m=edit&id=<?php echo $data_kategori_value['id']; ?>" class="btn">Edit</a>
              <a href="proses/admin/kategori/delete.php?id=<?php echo $data_kategori_value['id']; ?>" class="btn red" onclick="return confirm('Apakah anda yakin ingin menghapus kategori <?php echo $data_kategori_value['nama']; ?>?')">Hapus</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
