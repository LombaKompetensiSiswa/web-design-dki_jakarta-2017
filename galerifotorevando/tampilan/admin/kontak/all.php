<?php
$kontak = $koneksi->prepare('select *from kontak order by id desc');
$kontak->execute();
$data_kontak = $kontak->fetchAll();
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=kontak">Kontak</a></li>
          <li><a href="dashboard.php?p=kontak&m=all">Daftar Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Daftar Kontak</h2>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Judul Pesan</th>
            <th>Tindakan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data_kontak as $data_kontak_key => $data_kontak_value) {
          ?>
          <tr>
            <td><?php echo $no++; ?>.</td>
            <td><a href="dashboard.php?p=kontak&m=detail&id=<?php echo $data_kontak_value['id']; ?>" class="link-text"><?php echo $data_kontak_value['nama']; ?></a></td>
            <td><?php echo $data_kontak_value['judul_pesan']; ?></td>
            <td>
              <a href="dashboard.php?p=kontak&m=edit&id=<?php echo $data_kontak_value['id']; ?>" class="btn">Edit</a>
              <a href="proses/admin/kontak/delete.php?id=<?php echo $data_kontak_value['id']; ?>" class="btn red" onclick="return confirm('Apakah anda yakin ingin menghapus kontak <?php echo $data_kontak_value['nama']; ?>?')">Hapus</a>
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
