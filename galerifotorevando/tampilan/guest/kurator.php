<?php
$kurator = $koneksi->prepare('select *from kurator order by id desc');
$kurator->execute();
$data_kurator = $kurator->fetchAll();
?>
<section class="white">
  <div class="guest-container">
  <div class="row center">
    <div class="col s12">
      <h2 class="blue-text">Kurator</h2>
    </div>
  </div>
    <div class="row">
      <?php
      foreach($data_kurator as $data_kurator_key => $data_kurator_value){
      ?>
      <div class="col s-card" style="padding:0 30px">
        <div class="author">
          <div class="author-img">
            <a href="index.php?p=kurator&m=detail&id=<?php echo $data_kurator_value['id']; ?>">
              <img src="assets/img/users/<?php echo $data_kurator_value['foto']; ?>" alt="" class="circle">
            </a>
          </div>
          <div class="author-name">
            <a href="index.php?p=kurator&m=detail&id=<?php echo $data_kurator_value['id']; ?>"><?php echo $data_kurator_value['nama']; ?></a>
          </div>
          <div class="author-action center">
            <a href="index.php?p=kurator&m=detail&id=<?php echo $data_kurator_value['id']; ?>" class="btn round">Lihat Profile</a>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>
