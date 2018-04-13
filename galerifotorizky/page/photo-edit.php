<?php
require_once "header.php";
require_once "core/connection.php";

$id = $_GET['id'];
@$level = $_SESSION['level'];
@$name = $_SESSION['name'];

if(!$name){
  header("Location: index.php?");
}

$query = "SELECT * FROM tb_photo WHERE id ='$id'";
$result = $conn->query($query);

if($result->num_rows > 0){
  $fetch = $result->fetch_assoc();
?>


<section id="profile">
  <div class="container">
    <div class="row area">
      <div class="col-4">
        <img src="asset/img/<?= $fetch['photo']; ?>" class="box-photo">
      </div>
      <div class="col-8">
        <form action="" method="POST">
          <table>
            <tr>
              <td><b>Judul Foto</b></td>
              <td>:</td>
              <td><input type="text" name="title" value="<?= $fetch['title']; ?>"></td>
            </tr>
            <tr>
              <td><b>Kategori Foto</b></td>
              <td>:</td>
              <td><input type="text" name="category" value="<?= $fetch['category']; ?>"></td>
            </tr>
            <tr>
              <td><b>Nama Fotografer</b></td>
              <td>:</td>
              <td><input type="text" name="id_user" value="<?= $fetch['id_user']; ?>"></td>
            </tr>
            <tr>
              <td><b>Deskripsi</b></td>
              <td>:</td>
              <td><textarea name="descPhoto" rows="10" cols="100"> <?= $fetch['descPhoto'];?> </textarea></td>
            </tr>

            <?php
              if($level == 'admin' || $level == 'kurator'){
             ?>
            <tr>
              <td><b>Ratings</b></td>
              <td>:</td>
              <td>
                <select name="ratings">
                  <option selected disabled>--Berikan Rating--</option>
                  <option value="0">0</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="75">75</option>
                  <option value="100">100</option>
                </select>
              </td>
            </tr>
            <?php }else{echo " ";} ?>

          </table>
          <input class="form-button" type="submit" name="submit" value="SIMPAN DATA">
        </form>
      </div>
    </div>
  </div>
</section>

<?php }
require_once "footer.php";
$i =$_POST;

  if(isset($i['submit']) ){
      $title = $i['title'];
      $category = $i['category'];
      $id_user = $i['id_user'];
      $descPhoto = $i['descPhoto'];
      $ratings   = $i['ratings'];

      $update = "UPDATE tb_photo SET title='$title', category='$category', descPhoto='$descPhoto', id_user='$id_user', ratings='$ratings' WHERE id='$id' ";
      $result = $conn->query($update);

      if($result){
        echo "<script>alert('Data Berhasil di Update!'); </script>";
        header("Location: ?page=profile");
      }
  }






?>
