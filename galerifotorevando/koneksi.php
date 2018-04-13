<?php

session_start();

date_default_timezone_set('Asia/Jakarta');

$koneksi = new PDO('mysql:dbname=galerifotorevando;host=localhost','root','');
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

function get($val)
{
  return isset($_GET[$val])?htmlspecialchars($_GET[$val]):null;
}

function post($val)
{
  return isset($_POST[$val])?htmlspecialchars($_POST[$val]):null;
}

function getUrl($val)
{
  global $url;
  return stristr($url,$val);
}

?>
