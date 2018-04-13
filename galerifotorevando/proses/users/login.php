<?php

include '../../koneksi.php';

$username = post('username');
$password = md5(post('password'));

$login = $koneksi->prepare('select *from users where username = "'.$username.'" and password = "'.$password.'"');
$login->execute();
$user = $login->fetch(PDO::FETCH_ASSOC);

if ($user['id']!='') {
  $_SESSION['user_login'] = true;
  $_SESSION['user_id'] = $user['id'];

  if ($user['role_id']==1) {
    header('Location:../../dashboard.php?p=karya');
  }
  elseif ($user['role_id']==2) {
    header('Location:../../dashboard.php?p=karya');
  }
  elseif ($user['role_id']==3) {
    header('Location:../../dashboard.php?p=karya');
  }
}

else {
  $_SESSION['login_error'] = true;
  $_SESSION['login_msg'] = 'Username atau password salah.';
  header('Location:../../login.php');
}
?>
