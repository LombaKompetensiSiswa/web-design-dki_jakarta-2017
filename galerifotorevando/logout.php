<?php

include 'koneksi.php';

unset($_SESSION['user_login']);
unset($_SESSION['user_id']);

header('Location:login.php')
?>
