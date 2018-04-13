<?php
$fotografer = $koneksi->prepare('select *from fotografer order by id desc');
$fotografer->execute();
$data_fotografer = $fotografer->fetchAll();
?>
<section class="white">
  <div class="guest-container">
  <div class="row center">
    <div class="col s12">
      <h2 class="blue-text">Fotografer</h2>
    </div>
  </div>
    <div class="row">
      <?php
      foreach($data_fotografer as $data_fotografer_key => $data_fotografer_value){
      ?>
      <div class="col s-card" style="padding:0 30px">
        <div class="author">
          <div class="author-img">
            <a href="index.php?p=fotografer&m=detail&id=<?php echo $data_fotografer_value['id']; ?>">
              <img src="assets/img/users/<?php echo $data_fotografer_value['foto']; ?>" alt="" class="circle">
            </a>
          </div>
          <div class="author-name">
            <a href="index.php?p=fotografer&m=detail&id=<?php echo $data_fotografer_value['id']; ?>"><?php echo $data_fotografer_value['nama']; ?></a>
          </div>
          <div class="author-action center">
            <a href="index.php?p=fotografer&m=detail&id=<?php echo $data_fotografer_value['id']; ?>" class="btn round">Lihat Profile</a>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>
