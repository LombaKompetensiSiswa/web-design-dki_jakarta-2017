<?php require_once "header.php";
require_once "core/connection.php";
?>

<section id="banner">
  <div class="container">
    <div class="row area">
     <div class="col-12">
       <h1 class="main-title">Selamat Datang</h1>
     </div>
     <div class="col-5">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
     </div>
    </div>
  </div>
</section>

<section id="main-title">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="master-title">Tentang</h1>
        <p class="main-title-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-4">
        <h2 class="sub-main-title">Commercial Product</h2>
        <p class="main-title-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-4">
        <h2 class="sub-main-title">People</h2>
        <p class="main-title-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-4">
        <h2 class="sub-main-title">Sport</h2>
        <p class="main-title-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div id="wrapper" style="margin-left: 150px; margin-top:80px; display: block;">
      <div class="slider-wrapper theme-default" style="width: 960px; height: 400px;">
          <div id="slider" class="nivoSlider">

<!--  PRODUCT -->
<?php
$product_query = "SELECT * FROM tb_photo WHERE category ='product' && ratings >= 74 LIMIT 1";
$product_result = $conn->query($product_query);
if($product_result->num_rows > 0){
while($product = $product_result->fetch_assoc() ){
?>
              <a href="?page=photoProduct"><img src="asset/img/<?= $product['photo']; ?>" data-thumb="images/toystory.jpg" style="width: 960px; height: 400px;" title="COMMERCIAL PRODUCT"/></a>
<?php } } ?>

<!-- PEOPLE -->
<?php
$people_query = "SELECT * FROM tb_photo WHERE category='people' && ratings >= 74 LIMIT 1";
$people_result = $conn->query($people_query);
if($people_result->num_rows > 0){
while($people = $people_result->fetch_assoc()){
 ?>
              <a href="?page=photoPeople"><img src="asset/img/<?= $people['photo']; ?>" data-thumb="images/walle.jpg" data-transition="slideInLeft" style="width: 960px; height: 500px;" title="PEOPLE"/></a>
<?php } } ?>

<!-- SPORT -->
<?php
$sport_query = "SELECT * FROM tb_photo WHERE category='sport' && ratings >= 74 LIMIT 1";
$sport_result = $conn->query($sport_query);
if($sport_result->num_rows > 0){
while($sport = $sport_result->fetch_assoc()){
 ?>
              <a href="?page=photoSport"><img src="asset/img/<?= $sport['photo']; ?>" data-thumb="images/nemo.jpg" style="width: 960px; height: 500px;" title="SPORT"/></a>
<?php } } ?>
          </div>
      </div>
  </div>
</div>

<script type="text/javascript" src="asset/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="asset/slider/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>

<?php require_once "footer.php"; ?>
