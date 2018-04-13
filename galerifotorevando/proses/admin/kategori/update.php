<?php

include '../../../koneksi.php';

$id = post('id');
$nama = post('nama');

$update = $koneksi->prepare('update kategori set nama = "'.$nama.'" where id = "'.$id.'"');
$update->execute();

header('Location:../../../dashboard.php?p=kategori');
?>
