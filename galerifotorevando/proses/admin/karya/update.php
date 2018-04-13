<?php

include '../../../koneksi.php';

$id = post('id');
$judul = post('judul');
$tanggal = date('Y-m-d');
$keterangan = post('keterangan');
$kategori_id = post('kategori_id');
// $fotografer_id = post('fotografer_id');
// $rate = 0;
$tmp_foto = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
$file_name = round(microtime(true));
$ext = pathinfo($foto,PATHINFO_EXTENSION);
$file = $file_name.'.'.$ext;
$update_foto = '';

if ($tmp_foto!='') {
  move_uploaded_file($tmp_foto,'../../../assets/img/karya/'.$file);
  $update_foto = ', foto = "'.$file.'"';
}


$update = $koneksi->prepare('update karya set judul = "'.$judul.'", keterangan = "'.$keterangan.'", kategori_id = "'.$kategori_id.'" '.$update_foto.' where id = "'.$id.'"');
$update->execute();

header('Location:../../../dashboard.php?p=karya');
?>
