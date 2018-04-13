<?php

include '../../../koneksi.php';

$id = post('id');
$isi = post('isi');
$komen = $koneksi->prepare('select *from komentar where id = "'.$id.'"');
$komen->execute();
$data_komen = $komen->fetch(PDO::FETCH_ASSOC);

$update = $koneksi->prepare('update komentar set isi = "'.$isi.'" where id = "'.$id.'"');
$update->execute();

header('Location:../../../dashboard.php?p=karya&m=detail&id='.$data_komen['karya_id']);
?>
