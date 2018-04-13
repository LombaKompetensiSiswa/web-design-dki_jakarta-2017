<?php
$kategori = $koneksi->prepare('select *from kategori order by id desc');
$kategori->execute();
$data_kategori = $kategori->fetchAll();
?>
<section class="black">
  <div class="guest-container">
    <div class="row center">
      <div class="col s12">
        <h2 class="white-text">Cuplikan Galeri</h2>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="slider-wrapper theme-dark">
          <div id="slider">
            <?php
            foreach ($data_kategori as $data_kategori_key => $data_kategori_value) {
              $last_article = $koneksi->prepare('select *from karya where kategori_id = "'.$data_kategori_value['id'].'" and rate > 74 order by id desc limit 1');
              $last_article->execute();
              $data_last_article = $last_article->fetch(PDO::FETCH_ASSOC);
            ?>
            <a href="index.php?p=beranda&m=kategori&id=<?php echo $data_kategori_value['id']; ?>"><img src="assets/img/karya/<?php echo $data_last_article['foto'];?>" data-thumb="assets/img/karya/<?php echo $data_last_article['foto'];?>" title="<?php echo $data_kategori_value['nama']; ?>"></a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="grey">
  <div class="guest-container">
  <div class="row center">
    <div class="col s12">
      <h2 class="blue-text">Kategori</h2>
    </div>
  </div>
    <div class="row">
      <?php
      foreach ($data_kategori as $data_kategori_key => $data_kategori_value) {
        $last_article = $koneksi->prepare('select *from karya where kategori_id = "'.$data_kategori_value['id'].'" and rate > 74 order by id desc limit 1');
        $last_article->execute();
        $data_last_article = $last_article->fetch(PDO::FETCH_ASSOC);
        $kedua_article = $koneksi->prepare('select *from karya where kategori_id = "'.$data_kategori_value['id'].'" and rate > 74 and id < "'.$data_last_article['id'].'" order by id desc limit 1');
        $kedua_article->execute();
        $data_kedua_article = $kedua_article->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="col s-card">
        <div class="card">
          <div class="card-img">
            <a href="index.php?p=beranda&m=kategori&id=<?php echo $data_kategori_value['id']; ?>" class="card-img-content">
              <img src="assets/img/karya/<?php echo $data_kedua_article['foto']; ?>">
            </a>
          </div>
          <div class="card-content category">
            <div class="card-title">
              <a href="index.php?p=beranda&m=kategori&id=<?php echo $data_kategori_value['id']; ?>"><?php echo $data_kategori_value['nama']; ?></a>
            </div>
          </div>
          <div class="card-action single">
            <a href="index.php?p=beranda&m=kategori&id=<?php echo $data_kategori_value['id']; ?>" class="btn round">Lihat Galeri</a>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>
