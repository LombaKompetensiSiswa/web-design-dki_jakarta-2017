<?php

include '../../../koneksi.php';

$nama = post('nama');

$insert = $koneksi->prepare('insert into kategori(id,nama) values("","'.$nama.'")');
$insert->execute();

header('Location:../../../dashboard.php?p=kategori');
?>
