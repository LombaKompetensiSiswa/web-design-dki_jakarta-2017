<?php
$karya = $koneksi->prepare('select *from karya where fotografer_id = "'.$data_user_mapping['id'].'" and id = "'.get('id').'"');
$karya->execute();
$data_karya = $karya->fetch(PDO::FETCH_ASSOC);

$user_karya = $koneksi->prepare('select *from fotografer where id = "'.$data_karya['fotografer_id'].'"');
$user_karya->execute();
$data_user_karya = $user_karya->fetch(PDO::FETCH_ASSOC);

$kategori = $koneksi->prepare('select *from kategori where id = "'.$data_karya['kategori_id'].'"');
$kategori->execute();
$data_kategori = $kategori->fetch(PDO::FETCH_ASSOC);

$komentar = $koneksi->prepare('select *from komentar where karya_id = "'.$data_karya['id'].'"');
$komentar->execute();
$data_komentar = $komentar->fetchAll();
?>
<script type="text/javascript">
  function ediComment(id,isi,nama) {
    $('#row-edit-comment').remove();
    var html = '<div id="row-edit-comment"><form action="proses/admin/karya/update_comment.php" method="post"><div class="row"><div class="col s12"><h2>Edit Komentar '+nama+'</h2></div></div><div class="row"><div class="col s12"><input type="hidden" name="id" value="'+id+'"><textarea name="isi" placeholder="komentar" class="input">'+isi+'</textarea></div></div><div class="row"><div class="col s12"><a href="javascript:void(0)" class="btn red" onclick="tutupComment()">Batal</a><button type="submit" class="btn">Simpan</button></div></div></form></div>';
    $('#comment-'+id).after(html);
  }
  function tutupComment() {
    $('#row-edit-comment').remove();
  }
</script>
<div class="row">
  <div class="col s12">
    <div class="breadcrumb">
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="dashboard.php?p=karya">Karya</a></li>
        <li><a href="dashboard.php?p=karya&m=detail&id=<?php echo $data_karya['id']; ?>">Detail Karya</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12">
    <div class="card-panel no-padding">
      <img src="assets/img/karya/<?php echo $data_karya['foto']; ?>" class="responsive-img">
      <div class="row">
          <div class="col s12">
            <h2 class="karya-judul"><?php echo $data_karya['judul']; ?></h2>
          </div>
      </div>
      <div class="row">
          <div class="col s12">
            <span class="karya-data">Fotografer: <?php echo $data_user_karya['nama']; ?></span>
            <span class="karya-data">Tanggal terbit: <?php echo $data_karya['tanggal']; ?></span>
            <span class="karya-data">Rate: <?php echo $data_karya['rate']; ?></span>
            <span class="karya-data">Kategori: <?php echo $data_kategori['nama']; ?></span>
          </div>
      </div>
      <div class="row">
          <div class="col s12">
            <div class="karya-ket">
              <?php echo $data_karya['keterangan']; ?>
            </div>
          </div>
      </div>
      <div class="comment">
        <div class="row">
          <div class="col s12">
            <h2><?php echo count($data_komentar); ?> Komentar</h2>
          </div>
        </div>
        <?php
        foreach ($data_komentar as $data_komentar_key => $data_komentar_value) {
          $user_komen = $koneksi->prepare('select *from users where id = "'.$data_komentar_value['user_id'].'"');
          $user_komen->execute();
          $data_user_komen = $user_komen->fetch(PDO::FETCH_ASSOC);

          $role_komen = $koneksi->prepare('select *from roles where id = "'.$data_user_komen['role_id'].'"');
          $role_komen->execute();
          $data_role_komen = $role_komen->fetch(PDO::FETCH_ASSOC);

          if ($data_user_komen['role_id']==2) {
            $komen_nama = $koneksi->prepare('select *from kurator where user_id = "'.$data_user_komen['id'].'"');
            $komen_nama->execute();
            $data_komen_nama = $komen_nama->fetch(PDO::FETCH_ASSOC);
          }
          elseif ($data_user_komen['role_id']==3) {
            $komen_nama = $koneksi->prepare('select *from fotografer where user_id = "'.$data_user_komen['id'].'"');
            $komen_nama->execute();
            $data_komen_nama = $komen_nama->fetch(PDO::FETCH_ASSOC);
          }
        ?>
        <div id="comment-<?php echo $data_komentar_value['id']; ?>">
        <div class="row">
          <div class="col s2">
            <img src="assets/img/users/<?php echo $data_komen_nama['foto']; ?>" class="circle" width="70" height="70">
          </div>
          <div class="col s10">
            <div class="comment-name">
              <?php echo $data_komen_nama['nama']; ?> <span class="comment-role">(<?php echo $data_role_komen['nama']; ?>)</span>
            </div>
            <div class="comment-content">
              <?php echo $data_komentar_value['isi']; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <a href="javascript:void(0)" class="btn" onclick="ediComment(<?php echo $data_komentar_value['id']; ?>,'<?php echo $data_komentar_value['isi']; ?>','<?php echo $data_komen_nama['nama']; ?>')">Edit</a>
          </div>
        </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
