<?php
$karya = $koneksi->prepare('select *from karya where rate > 74 order by id desc');
$karya->execute();
$data_karya = $karya->fetchAll();
?>
<section class="grey">
  <div class="guest-container">
  <div class="row center">
    <div class="col s12">
      <h2 class="blue-text">Galeri</h2>
    </div>
  </div>
    <div class="row">
      <?php
      foreach ($data_karya as $data_karya_key => $data_karya_value) {
        $kategori = $koneksi->prepare('select *from kategori where id = "'.$data_karya_value['kategori_id'].'"');
        $kategori->execute();
        $data_kategori = $kategori->fetch(PDO::FETCH_ASSOC);

        $fotografer = $koneksi->prepare('select *from fotografer where id = "'.$data_karya_value['fotografer_id'].'"');
        $fotografer->execute();
        $data_fotografer = $fotografer->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="col s-card">
        <div class="card">
          <div class="card-img">
            <a href="index.php?p=galeri&m=detail&id=<?php echo $data_karya_value['id']; ?>" class="card-img-content">
              <img src="assets/img/karya/<?php echo $data_karya_value['foto']; ?>">
            </a>
          </div>
          <div class="card-content">
            <div class="card-title">
              <a href="index.php?p=galeri&m=detail&id=<?php echo $data_karya_value['id']; ?>"><?php echo $data_karya_value['judul']; ?></a>
            </div>
            <div class="card-category">
              <span>Kategori: <?php echo $data_kategori['nama']; ?></span>
              <span>Fotografer: <?php echo $data_fotografer['nama']; ?></span>
              <span>Publikasi: <?php echo $data_karya_value['tanggal']; ?></span>
            </div>
          </div>
          <div class="card-action single">
            <a href="index.php?p=galeri&m=detail&id=<?php echo $data_karya_value['id']; ?>" class="btn round">Selengkapnya</a>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>
