<?php
require_once "header.php";
require_once "core/connection.php";

$id = $_GET['id'];

$query = "SELECT * FROM tb_photo WHERE id ='$id' ";
$result = $conn->query($query);

if($result->num_rows > 0){
  $fetch = $result->fetch_assoc();
?>

<section id="profile">
  <div class="container">
    <div class="row area">
      <div class="col-6">
        <img src="asset/img/<?= $fetch['photo']; ?>" class="box-photo">
      </div>
      <div class="col-6">
        <table>
          <tr>
            <td><b>Judul</b></td>
            <td>:</td>
            <td><?= $fetch['title']; ?></td>
          </tr>
          <tr>
            <td><b>Kategori</b></td>
            <td>:</td>
            <td> <?= $fetch['category'];?></td>
          </tr>
          <tr>
            <td><b>Nama Fotografer</b></td>
            <td>:</td>
            <td> <?= $fetch['id_user'];?></td>
          </tr>
          <tr>
            <td><b>Tanggal Posting</b></td>
            <td>:</td>
            <td> <?= $fetch['date'];?></td>
          </tr>
          <tr>
            <td><b>Ratings</b></td>
            <td>:</td>
            <td> <?= $fetch['ratings'];?></td>
          </tr>
          <tr>
            <td><b>Deskripsi</b></td>
            <td>:</td>
            <td> <?= $fetch['descPhoto'];?></td>
          </tr>
        </table>
        <a href="?page=gallery">Back</a>
      </div>
    </div>
  </div>
</section>

<section id="commentar">
  <div class="container">
    <div class="row">

      <!-- Commentar Area -->
      <div class="col-6">
        <h1>Commentar</h1>
      </div>
      <?php
        $view_comment = "SELECT * FROM tb_comment";
        $view_result = $conn->query($view_comment);
        if($view_result->num_rows > 0){
          while($comment = $view_result->fetch_assoc()){

      ?>
      <div class="col-6"></div>
      <div class="col-6">
        <p>
          <h4><?= $comment['name'];?></h4>
          <p><?= $comment['comment'];?></p>
        </p>
      </div>
      <?php }} ?>

    </div>
  </div>
<div class="container">
  <h3 style="padding: 10px;">Berikan Komentar mu!</h3>
  <form  action="" method="post">
    <input type="text" name="name" value="" placeholder="Nama" class="form-input">
    <textarea name="commentar" rows="8" cols="80" placeholder="commentar" class="form-comment"></textarea>
    <input type="submit" name="submit" value="KIRIM" class="form-button">
  </form>

  <style media="screen">
    .form-input{
      display: block;
      width: 150px;
      height: 30px;
      margin-bottom: 20px;
      border: 2px solid #333;
    }
    .form-comment{
      display: block;
      border: 2px solid #333;
      margin-bottom: 20px;
    }

    .form-button{

      float: left;
    }
  </style>
</div>

</section>

<?php }
$i = $_POST;
if(isset($i['submit']) ){
  $name = $i['name'];
  $comment = $i['commentar'];


  $comment_query = "INSERT INTO tb_comment(name,comment) VALUES ('$name', '$comment')";
  $comment_result = $conn->query($comment_query);

  if($comment_result){
    echo "<script>alert('Berhasil Menambah komentar!')</script>";
  }
}


require_once "footer.php"; ?>
