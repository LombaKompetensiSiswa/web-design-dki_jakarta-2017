<?php require_once "header.php";
require_once "core/connection.php";
?>

<!-- PEOPLE AREA -->
<?php
$people_query = "SELECT * FROM tb_photo WHERE category='people' && ratings >= 74 ";
$people_result = $conn->query($people_query);
?>

<section id="gallery">
  <div class="container">
    <div class="row area" style="padding-top:100px;">

      <div class="col-12">
        <h1 class="master-title">People</h1>
        <p class="main-title-desc"><b>Berikut adalah foto dengan kategori People</b></p>
      </div>

      <?php
       if($people_result->num_rows > 0){
         while($people = $people_result->fetch_assoc()){
      ?>
            <div class="col-4">
              <h3 class="titlePhoto"><a href="?page=photo&action=view&id=<?= $people['id'];?>"><?= $people['title']; ?></a></h3>
              <a href="?page=photo&action=view&id=<?= $people['id'];?>"><img src="asset/img/<?= $people['photo']; ?>" class="box-photo" style="margin: auto; display:block;"></a>
              <table>
                <tr>
                  <td><b>Kategori</b></td>
                  <td>:</td>
                  <td><?= $people['category']; ?></td>
                </tr>
                <tr>
                  <td><b>Nama Fotografer</b></td>
                  <td>:</td>
                  <td><?= $people['id_user']; ?></td>
                </tr>
                <tr>
                  <td><b>Tanggal Posting</b></td>
                  <td>:</td>
                  <td><?= $people['date']; ?></td>
                </tr>
                <tr>
                  <td><b>Ratings</b></td>
                  <td>:</td>
                  <td><?= $people['ratings']; ?></td>
                </tr>
              </table>
            </div>
      <?php } }?>

    </div>
  </div>
</section>

<style media="screen">
    a{
      text-decoration: none;
      color: #000;
    }
</style>



<?php require_once "footer.php"; ?>
