<?php

include '../../../koneksi.php';

$judul = post('judul');
$tanggal = date('Y-m-d');
$keterangan = post('keterangan');
$kategori_id = post('kategori_id');
$fotografer_id = post('fotografer_id');
$rate = 0;
$tmp_foto = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
$file_name = round(microtime(true));
$ext = pathinfo($foto,PATHINFO_EXTENSION);
$file = $file_name.'.'.$ext;

move_uploaded_file($tmp_foto,'../../../assets/img/karya/'.$file);

$insert = $koneksi->prepare('insert into karya(id,judul,tanggal,foto,keterangan,kategori_id,fotografer_id,rate) values("","'.$judul.'","'.$tanggal.'","'.$file.'","'.$keterangan.'","'.$kategori_id.'","'.$fotografer_id.'","'.$rate.'")');
$insert->execute();

header('Location:../../../dashboard.php?p=karya');
?>
