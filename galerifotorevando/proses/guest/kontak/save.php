<?php

include '../../../koneksi.php';

$nama = post('nama');
$judul_pesan = post('judul_pesan');
$isi_pesan = post('isi_pesan');

$save = $koneksi->prepare('insert into kontak(id,nama_pesan,judul_pesan,isi_pesan) values("","'.$nama.'","'.$judul_pesan.'","'.$isi_pesan.'")');
$save->execute();

$_SESSION['kontak_sukses'] = true;
$_SESSION['kontak_msg'] = 'Pesan berhasil terkirim.';

header('Location:../../../index.php?p=kontak');
?>
