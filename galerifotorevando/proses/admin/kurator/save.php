<?php

include '../../../koneksi.php';

$nama = post('nama');
$username = post('username');
$password = md5(post('password'));
$biodata = post('biodata');
$tmp_foto = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
$file_name = round(microtime(true));
$ext = pathinfo($foto,PATHINFO_EXTENSION);
$file = $file_name.'.'.$ext;
$role_id = 2;

move_uploaded_file($tmp_foto,'../../../assets/img/users/'.$file);

$insert_user = $koneksi->prepare('insert into users(id,username,password,role_id) values("","'.$username.'","'.$password.'","'.$role_id.'")');
$insert_user->execute();

$last_user = $koneksi->prepare('select *from users where username = "'.$username.'"');
$last_user->execute();
$data_last_user = $last_user->fetch(PDO::FETCH_ASSOC);

$insert_mapping = $koneksi->prepare('insert into kurator(id,nama,foto,biodata,user_id) values("","'.$nama.'","'.$file.'","'.$biodata.'","'.$data_last_user['id'].'")');
$insert_mapping->execute();

header('Location:../../../dashboard.php?p=kurator');
?>
