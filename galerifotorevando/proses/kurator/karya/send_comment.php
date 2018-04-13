<?php

include '../../../koneksi.php';

$user_id = post('user_id');
$karya_id = post('karya_id');
$isi = post('isi');

$insert = $koneksi->prepare('insert into komentar(id,isi,karya_id,user_id) values("","'.$isi.'","'.$karya_id.'","'.$user_id.'")');
$insert->execute();

header('Location:../../../dashboard.php?p=karya&m=detail&id='.$karya_id);
?>
