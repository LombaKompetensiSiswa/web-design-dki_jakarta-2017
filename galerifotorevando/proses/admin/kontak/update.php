<?php

include '../../../koneksi.php';

$id = post('id');
$nama = post('nama');
$judul_pesan = post('judul_pesan');
$isi_pesan = post('isi_pesan');

$update = $koneksi->prepare('update kontak set nama = "'.$nama.'", judul_pesan = "'.$judul_pesan.'", isi_pesan = "'.$isi_pesan.'" where id = "'.$id.'"');
$update->execute();

header('Location:../../../dashboard.php?p=kontak');
?>
