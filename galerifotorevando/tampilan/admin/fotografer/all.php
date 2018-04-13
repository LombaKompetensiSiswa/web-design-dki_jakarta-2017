<?php
$fotografer = $koneksi->prepare('select *from fotografer order by id desc');
$fotografer->execute();
$data_fotografer = $fotografer->fetchAll();
?>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=fotografer">Fotografer</a></li>
          <li><a href="dashboard.php?p=fotografer&m=all">Daftar Fotografer</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Daftar Fotografer</h2>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=fotografer&m=add" class="btn">Tambah Fotografer</a>
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
          foreach ($data_fotografer as $data_fotografer_key => $data_fotografer_value) {
            $select_user = $koneksi->prepare('select *from users where id = "'.$data_fotografer_value['user_id'].'"');
            $select_user->execute();
            $data_select_user = $select_user->fetch(PDO::FETCH_ASSOC);
          ?>
          <tr>
            <td><?php echo $no++; ?>.</td>
            <td><a href="dashboard.php?p=fotografer&m=detail&id=<?php echo $data_fotografer_value['id']; ?>" class="link-text"><?php echo $data_fotografer_value['nama']; ?></a></td>
            <td><?php echo $data_select_user['username'] ?></td>
            <td>Fotografer</td>
            <td>
              <a href="dashboard.php?p=fotografer&m=edit&id=<?php echo $data_fotografer_value['id']; ?>" class="btn">Edit</a>
              <a href="proses/admin/fotografer/delete.php?id=<?php echo $data_select_user['id']; ?>" class="btn red" onclick="return confirm('Apakah anda yakin ingin menghapus <?php echo $data_fotografer_value['nama']; ?>?')">Hapus</a>
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
