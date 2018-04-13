<?php
require_once "core/connection.php";
session_start();
@$name = $_SESSION['name'];
@$level = $_SESSION['level'];
?>

<nav>
  <a href="index.php?"><img src="asset/img/header/logo.png" style="float: left;
  padding: 15px 0 0 20px;"></a>
  <div class="container">
    <ul>
      <li><a href="?">Home</a></li>
      <li class="menu"><a href="?page=gallery">Galeri</a>
        <div class="list-menu">
          <a href="?page=photoProduct">Commercial Product</a>
          <a href="?page=photoPeople">People</a>
          <a href="?page=photoSport">Sport</a>
        </div>
      </li>
      <li><a href="?page=photographer">Fotografer</a></li>
      <li><a href="?page=kurator">Kurator</a></li>
      <li><a href="?page=webProfile">Profile Website</a></li>
      <?php if($level !='admin'){ ?>
      <li><a href="?page=contact">Kontak</a></li>
      <?php } ?>

      <?php if($name){?>
        <li><a href="?page=profile">Profile</a></li>
      <?php } ?>

      <?php if($level == 'admin'){ ?>
        <li><a href="?page=adminPanel">Admin Panel</a></li>
      <?php }elseif($level == 'kurator'){?>
        <li><a href="?page=kuratorPanel">Kurator Panel</a></li>
      <?php }elseif($level == 'member'){ ?>
        <li><a href="?page=photo&action=add">Upload Karya</a></li>
      <?php }else{ echo " ";} ?>

      <!--LOGIN-->
      <?php if(!$name){ ?>
      <li class="right"><a href="?page=login" style="color:#000;">Login</a></li>
      <?php }else{?>
      <li class="right"><a href="?page=logout" style="color:#000;">Logout</a></li>
      <?php } ?>
    </ul>


  </div>
</nav>
