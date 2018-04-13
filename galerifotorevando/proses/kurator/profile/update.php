<?php

include '../../../koneksi.php';

$user_id = post('user_id');
$mapping_id = post('mapping_id');
$nama = post('nama');
$username = post('username');
$password = post('password');
$biodata = post('biodata');
$tmp_foto = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
$file_name = round(microtime(true));
$ext = pathinfo($foto,PATHINFO_EXTENSION);
$file = $file_name.'.'.$ext;
$update_foto = '';
$update_password = '';

if ($tmp_foto!='') {
  move_uploaded_file($tmp_foto,'../../../assets/img/users/'.$file);
  $update_foto = ', foto = "'.$file.'"';
}

if ($password!='') {
  $update_password = ', password = "'.md5($password).'"';
}

$update_user = $koneksi->prepare('update users set username = "'.$username.'" '.$update_password.' where id = "'.$user_id.'"');
$update_user->execute();

$update_mapping = $koneksi->prepare('update kurator set nama = "'.$nama.'", biodata = "'.$biodata.'" '.$update_foto.' where id = "'.$mapping_id.'"');
$update_mapping->execute();

header('Location:../../../dashboard.php?p=profile');
?>
