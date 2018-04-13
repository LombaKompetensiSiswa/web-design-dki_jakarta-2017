<?php
$karya = $koneksi->prepare('select *from karya where rate > 74 and id = "'.get('id').'"');
$karya->execute();
$data_karya = $karya->fetch(PDO::FETCH_ASSOC);

$user_karya = $koneksi->prepare('select *from fotografer where id = "'.$data_karya['fotografer_id'].'"');
$user_karya->execute();
$data_user_karya = $user_karya->fetch(PDO::FETCH_ASSOC);

$kategori = $koneksi->prepare('select *from kategori where id = "'.$data_karya['kategori_id'].'"');
$kategori->execute();
$data_kategori = $kategori->fetch(PDO::FETCH_ASSOC);
?>
<section class="grey">
  <div class="guest-container">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="index.php">Halaman Awal</a></li>
          <li><a href="index.php?p=galeri">Galeri</a></li>
          <li><a href="index.php?p=galeri&m=detail&id=<?php echo $data_karya['id']; ?>">Detail Galeri</a></li>
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
              <div class="karya-data-main">
                <span class="karya-data">Fotografer: <?php echo $data_user_karya['nama']; ?></span>
                <span class="karya-data">Tanggal terbit: <?php echo $data_karya['tanggal']; ?></span>
                <span class="karya-data">Kategori: <?php echo $data_kategori['nama']; ?></span>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
              <div class="karya-ket">
                <?php echo $data_karya['keterangan']; ?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
