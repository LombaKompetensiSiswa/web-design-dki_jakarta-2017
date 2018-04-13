<?php
require_once "header.php";
require_once "core/connection.php";

if($level != 'kurator'){
  header("Location: index.php?");
}

$query2 ="SELECT * FROM tb_photo";
$result2 = $conn->query($query2);

?>

<section id="gallery">
  <div class="container">
    <div class="row area" style="padding-top:100px">

      <div class="col-12">
        <h1 class="master-title">Photo List</h1>
        <p class="main-title-desc"><b>Berikut adalah foto yang telah ter-upload ke database.</b></p>
        <p class="main-title-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
        </p>
      </div>

     <?php
       $query2 ="SELECT * FROM tb_photo";
       $result2 = $conn->query($query2);
       if($result2->num_rows > 0){
         while($photo = $result2->fetch_assoc()){
     ?>
      <div class="col-4">
        <h3 class="titlePhoto"><?= $photo['title']; ?></h3>
        <img src="asset/img/<?= $photo['photo']; ?>" class="box-photo" style="margin: auto; display:block;">
        <table>
          <tr>
            <td><b>Kategori</b></td>
            <td>:</td>
            <td><?= $photo['category']; ?></td>
          </tr>
          <tr>
            <td><b>Nama Fotografer</b></td>
            <td>:</td>
            <td><?= $photo['id_user']; ?></td>
          </tr>
          <tr>
            <td><b>Tanggal Posting</b></td>
            <td>:</td>
            <td><?= $photo['date']; ?></td>
          </tr>
          <tr>
            <td><b>Ratings</b></td>
            <td>:</td>
            <td><?= $photo['ratings']; ?></td>
          </tr>
          <tr>
            <td><b>Aksi</b></td>
            <td>:</td>
            <td>
              <a href="?page=photo&action=edit&id=<?=$photo['id'];?>">EDIT</a> ||
              <a href="?page=photo&action=delete&id=<?=$photo['id'];?>">HAPUS</a>
            </td>
          </tr>
        </table>
      </div>
      <?php } }?>

    </div>
  </div>
</section>

 <?php require_once "footer.php"; ?>
