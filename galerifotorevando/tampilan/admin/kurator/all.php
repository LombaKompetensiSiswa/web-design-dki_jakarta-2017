<?php
$kurator = $koneksi->prepare('select *from kurator order by id desc');
$kurator->execute();
$data_kurator = $kurator->fetchAll();
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=kurator">Kurator</a></li>
          <li><a href="dashboard.php?p=kurator&m=all">Daftar Kurator</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Daftar Kurator</h2>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=kurator&m=add" class="btn">Tambah Kurator</a>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Akses</th>
            <th>Tindakan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data_kurator as $data_kurator_key => $data_kurator_value) {
            $select_user = $koneksi->prepare('select *from users where id = "'.$data_kurator_value['user_id'].'"');
            $select_user->execute();
            $data_select_user = $select_user->fetch(PDO::FETCH_ASSOC);
          ?>
          <tr>
            <td><?php echo $no++; ?>.</td>
            <td><a href="dashboard.php?p=kurator&m=detail&id=<?php echo $data_kurator_value['id']; ?>" class="link-text"><?php echo $data_kurator_value['nama']; ?></a></td>
            <td><?php echo $data_select_user['username'] ?></td>
            <td>Kurator</td>
            <td>
              <a href="dashboard.php?p=kurator&m=edit&id=<?php echo $data_kurator_value['id']; ?>" class="btn">Edit</a>
              <a href="proses/admin/kurator/delete.php?id=<?php echo $data_select_user['id']; ?>" class="btn red" onclick="return confirm('Apakah anda yakin ingin menghapus <?php echo $data_kurator_value['nama']; ?>?')">Hapus</a>
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
