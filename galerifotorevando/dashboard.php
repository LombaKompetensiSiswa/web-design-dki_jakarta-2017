<?php
include 'koneksi.php';
if (!isset($_SESSION['user_login'])) {
  header('Location:login.php');
}

$user = $koneksi->prepare('select *from users where id = "'.$_SESSION['user_id'].'"');
$user->execute();
$data_user = $user->fetch(PDO::FETCH_ASSOC);

$role_dash = $koneksi->prepare('select *from roles where id = "'.$data_user['role_id'].'"');
$role_dash->execute();
$data_role_dash = $role_dash->fetch(PDO::FETCH_ASSOC);

if ($data_user['role_id']==1) {
  $user_mapping = $koneksi->prepare('select *from admin where user_id = "'.$data_user['id'].'"');
  $user_mapping->execute();
  $data_user_mapping = $user_mapping->fetch(PDO::FETCH_ASSOC);
}
elseif ($data_user['role_id']==2) {
  $user_mapping = $koneksi->prepare('select *from kurator where user_id = "'.$data_user['id'].'"');
  $user_mapping->execute();
  $data_user_mapping = $user_mapping->fetch(PDO::FETCH_ASSOC);
}
elseif ($data_user['role_id']==3) {
  $user_mapping = $koneksi->prepare('select *from fotografer where user_id = "'.$data_user['id'].'"');
  $user_mapping->execute();
  $data_user_mapping = $user_mapping->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Galeri Fotografi</title>
    <link rel="stylesheet" href="assets/css/main.css?time=<?php echo time(); ?>">
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#open-submenu').click(function(){
        $('#sub-menu').toggleClass('none');
      });
      $(window).resize(function(){
        var width = parseInt($(window).width());
        if (width>700) {
          $('aside').css('display','block');
        }
        else {
          $('aside').css('display','none');
        }
      })
      $('.button-collapse').click(function(){
        // alert('clicked');
        if ($('aside').css('display')=='none') {
          $('aside').css('display','block');
        }
        else {
          $('aside').css('display','none');
        }
      });
    });
    </script>
  </head>
  <body class="grey">
    <?php
    include 'nav-dashboard.php';
    ?>
    <div class="row">
      <div class="col s2">
        <?php
        include 'side-dashboard.php';
        ?>
      </div>
      <div class="col s10 dashboard">
        <?php
        if (!is_null(get('p'))) {
          switch ($data_user['role_id']) {

            case 1:
              switch (get('p')) {

                case 'karya':
                  switch (get('m')) {
                    case 'all':
                      include 'tampilan/admin/karya/all.php';
                      break;

                    case 'detail':
                      include 'tampilan/admin/karya/detail.php';
                      break;

                    case 'edit':
                      include 'tampilan/admin/karya/edit.php';
                      break;

                    case 'kategori':
                      include 'tampilan/admin/karya/kategori_all.php';
                      break;

                    default:
                      include 'tampilan/admin/karya/all.php';
                      break;
                  }
                break;

                case 'kontak':
                  switch (get('m')) {
                    case 'all':
                      include 'tampilan/admin/kontak/all.php';
                      break;

                    case 'detail':
                      include 'tampilan/admin/kontak/detail.php';
                      break;

                    case 'edit':
                      include 'tampilan/admin/kontak/edit.php';
                      break;

                    default:
                      include 'tampilan/admin/kontak/all.php';
                      break;
                  }
                break;

                case 'kurator':
                  switch (get('m')) {
                    case 'all':
                        include 'tampilan/admin/kurator/all.php';
                      break;

                    case 'add':
                        include 'tampilan/admin/kurator/add.php';
                      break;

                    case 'edit':
                        include 'tampilan/admin/kurator/edit.php';
                      break;

                    case 'detail':
                        include 'tampilan/admin/kurator/detail.php';
                      break;

                    default:
                        include 'tampilan/admin/kurator/all.php';
                      break;
                  }
                break;

                case 'fotografer':
                  switch (get('m')) {
                    case 'all':
                        include 'tampilan/admin/fotografer/all.php';
                      break;

                    case 'add':
                        include 'tampilan/admin/fotografer/add.php';
                      break;

                    case 'edit':
                        include 'tampilan/admin/fotografer/edit.php';
                      break;

                    case 'detail':
                        include 'tampilan/admin/fotografer/detail.php';
                      break;

                    default:
                        include 'tampilan/admin/fotografer/all.php';
                      break;
                  }
                break;

                case 'kategori':
                  switch (get('m')) {
                    case 'add':
                        include 'tampilan/admin/kategori/add.php';
                      break;

                    case 'all':
                        include 'tampilan/admin/kategori/all.php';
                      break;

                    case 'edit':
                        include 'tampilan/admin/kategori/edit.php';
                      break;

                    case 'detail':
                        include 'tampilan/admin/kategori/detail.php';
                      break;

                    default:
                        include 'tampilan/admin/kategori/all.php';
                      break;
                  }
                  break;
              }
            break;

            case 2:
              switch (get('p')) {
                case 'profile':
                  switch (get('m')) {
                    case 'detail':
                      include 'tampilan/kurator/profile/detail.php';
                      break;

                    case 'edit':
                      include 'tampilan/kurator/profile/edit.php';
                      break;

                    default:
                      include 'tampilan/kurator/profile/detail.php';
                      break;
                  }
                break;

                case 'karya':
                    switch (get('m')) {
                      case 'all':
                          include 'tampilan/kurator/karya/all.php';
                        break;

                      case 'detail':
                          include 'tampilan/kurator/karya/detail.php';
                        break;

                      case 'rate':
                          include 'tampilan/kurator/karya/rate.php';
                        break;

                      case 'kategori':
                          include 'tampilan/kurator/karya/kategori_all.php';
                        break;

                      default:
                          include 'tampilan/kurator/karya/all.php';
                        break;
                    }
                  break;
              }
            break;


            case 3:
              switch (get('p')) {

                case 'profile':
                  switch (get('m')) {
                    case 'detail':
                      include 'tampilan/anggota/profile/detail.php';
                      break;

                    case 'edit':
                      include 'tampilan/anggota/profile/edit.php';
                      break;

                    default:
                      include 'tampilan/anggota/profile/detail.php';
                      break;
                  }
                break;

                case 'karya':
                  switch (get('m')) {
                    case 'all':
                      include 'tampilan/anggota/karya/all.php';
                      break;

                    case 'edit':
                      include 'tampilan/anggota/karya/edit.php';
                      break;

                    case 'add':
                        include 'tampilan/anggota/karya/add.php';
                        break;

                    case 'detail':
                        include 'tampilan/anggota/karya/detail.php';
                        break;

                    case 'kategori':
                        include 'tampilan/anggota/karya/kategori_all.php';
                        break;

                    default:
                        include 'tampilan/anggota/karya/all.php';
                        break;
                  }
                  break;
              }
              break;
          }
        }
        else {
          switch ($data_user['role_id']) {
            case 2:
              include 'tampilan/kurator/karya/all.php';
            break;

            case 3:
              include 'tampilan/anggota/karya/all.php';
              break;
          }
        }
        ?>
      </div>
    </div>
  </body>
</html>
