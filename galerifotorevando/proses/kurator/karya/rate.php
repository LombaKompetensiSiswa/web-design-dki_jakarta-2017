<?php

include '../../../koneksi.php';

$rate = post('rate');
$id = post('id');
$kurator_id = post('kurator_id');

$rate = $koneksi->prepare('insert into rate(id,nilai,karya_id,kurator_id) values("","'.$rate.'","'.$id.'","'.$kurator_id.'")');
$rate->execute();

$sum_rate = $koneksi->prepare('select sum(nilai) as sum_nilai from rate where karya_id = "'.$id.'"');
$sum_rate->execute();
$total_sum_rate = $sum_rate->fetch(PDO::FETCH_ASSOC);

$count_rate = $koneksi->prepare('select count(nilai) as count_nilai from rate where karya_id = "'.$id.'"');
$count_rate->execute();
$total_count_rate = $count_rate->fetch(PDO::FETCH_ASSOC);

$total_rate = $total_sum_rate['sum_nilai']/$total_count_rate['count_nilai'];

$update_karya = $koneksi->prepare('update karya set rate = "'.$total_rate.'" where id = "'.$id.'"');
$update_karya->execute();

header('Location:../../../dashboard.php?p=karya');
?>
