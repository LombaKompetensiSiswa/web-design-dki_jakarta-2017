<?php
  require_once "header.php";
  require_once "core/connection.php";
?>
<section id="gallery">
  <div class="container">
    <div class="row area" style="padding-top:100px;">

<!-- PRODUCT AREA -->
<?php
$product_query = "SELECT * FROM tb_photo WHERE category ='product' && ratings >= 74 ";
$product_result = $conn->query($product_query);
?>
      <div class="col-12">
        <h1 class="master-title">Commercial Product</h1>
        <p class="main-title-desc"><b>Berikut adalah foto dengan kategori Commercial Product</b></p>
      </div>

<?php
 if($product_result->num_rows > 0){
   while($product = $product_result->fetch_assoc()){
?>
      <div class="col-4">
        <h3 class="titlePhoto"><a href="?page=photo&action=view&id=<?= $product['id'];?>"><?= $product['title']; ?></a></h3>
        <a href="?page=photo&action=view&id=<?= $product['id'];?>"><img src="asset/img/<?= $product['photo']; ?>" class="box-photo" style="margin: auto; display:block;"></a>
        <table>
          <tr>
            <td><b>Kategori</b></td>
            <td>:</td>
            <td><?= $product['category']; ?></td>
          </tr>
          <tr>
            <td><b>Nama Fotografer</b></td>
            <td>:</td>
            <td><?= $product['id_user']; ?></td>
          </tr>
          <tr>
            <td><b>Tanggal Posting</b></td>
            <td>:</td>
            <td><?= $product['date']; ?></td>
          </tr>
          <tr>
            <td><b>Ratings</b></td>
            <td>:</td>
            <td><?= $product['ratings']; ?></td>
          </tr>
        </table>
      </div>
<?php } }?>


<!-- PEOPLE AREA -->
<?php
$people_query = "SELECT * FROM tb_photo WHERE category='people' && ratings >= 74 ";
$people_result = $conn->query($people_query);
?>

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

<!-- SPORT AREA -->
<?php
$sport_query = "SELECT * FROM tb_photo WHERE category='sport' && ratings >= 74 ";
$sport_result = $conn->query($sport_query);
?>

<div class="col-12">
  <h1 class="master-title">Sport</h1>
  <p class="main-title-desc"><b>Berikut adalah foto dengan kategori Sport</b></p>
</div>

<?php
 if($sport_result->num_rows > 0){
   while($sport = $sport_result->fetch_assoc()){
?>
      <div class="col-4">
        <h3 class="titlePhoto"><a href="?page=photo&action=view&id=<?= $sport['id'];?>"><?= $sport['title']; ?></a></h3>
        <a href="?page=photo&action=view&id=<?= $sport['id'];?>"><img src="asset/img/<?= $sport['photo']; ?>" class="box-photo" style="margin: auto; display:block;"></a>
        <table>
          <tr>
            <td><b>Kategori</b></td>
            <td>:</td>
            <td><?= $sport['category']; ?></td>
          </tr>
          <tr>
            <td><b>Nama Fotografer</b></td>
            <td>:</td>
            <td><?= $sport['id_user']; ?></td>
          </tr>
          <tr>
            <td><b>Tanggal Posting</b></td>
            <td>:</td>
            <td><?= $sport['date']; ?></td>
          </tr>
          <tr>
            <td><b>Ratings</b></td>
            <td>:</td>
            <td><?= $sport['ratings']; ?></td>
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

<?php require_once "footer.php" ?>
