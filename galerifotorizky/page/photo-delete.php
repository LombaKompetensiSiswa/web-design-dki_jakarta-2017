<?php
require_once "core/connection.php";

$id = $_GET['id'];

$query = "DELETE FROM tb_photo WHERE id='$id' ";
$result = $conn->query($query);

if($result){
  echo "<script>alert('Data Berhasil Dihapus!');</script>";
  header("Location:?page=profile");
}


 ?>
