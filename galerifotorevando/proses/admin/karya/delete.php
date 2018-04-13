<?php

include '../../../koneksi.php';

$id = get('id');

$delete = $koneksi->prepare('delete from karya where id = "'.$id.'"');
$delete->execute();

header('Location:../../../dashboard.php?p=karya');
?>
