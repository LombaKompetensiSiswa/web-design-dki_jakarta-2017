<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Galeri Fotografi</title>
    <link rel="stylesheet" href="assets/css/main.css?time=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/nivo-slider.css?time=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/themes/dark/dark.css?time=<?php echo time(); ?>">
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/jquery.nivo.slider.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#slider').nivoSlider();
        $('.button-collapse').click(function(){
          // alert('clicked');
          if ($('nav').css('height')=='64px') {
            $('nav').css('height','auto');
          }
          else {
            $('nav').css('height','64px');
          }
        });
      });
    </script>
  </head>
  <body>
    <?php
    include 'nav.php';
    ?>
    <header>
      <div class="guest-container">
        <div class="row">
          <div class="col s12">
            <h1 class="center">Galeri Fotografi</h1>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <h2 class="center">Berbagi momen apapun, kapanpun dan dimanapun dengan orang lain. Hanya di Galeri Fotografi semua bisa berbagi.</h2>
          </div>
        </div>
        <div class="row center">
          <div class="col s12">
            <a href="login.php" class="btn">Masuk</a>
          </div>
        </div>
      </div>
    </header>
    <?php
    if (!is_null(get('p'))) {
      switch (get('p')) {
        case 'beranda':
          include 'tampilan/guest/beranda.php';
          break;

        case 'galeri':
          switch (get('m')) {
            case 'detail':
              include 'tampilan/guest/detail_karya.php';
              break;

            default:
              include 'tampilan/guest/galeri.php';
              break;
          }
          break;

        case 'fotografer':
          switch (get('m')) {
            case 'detail':
              include 'tampilan/guest/detail_fotografer.php';
              break;

            default:
              include 'tampilan/guest/fotografer.php';
              break;
          }
          break;

        case 'kurator':
          switch (get('m')) {
            case 'detail':
              include 'tampilan/guest/detail_kurator.php';
              break;

            default:
              include 'tampilan/guest/kurator.php';
              break;
          }
          break;

        case 'profil':
          include 'tampilan/guest/profil.php';
          break;

        case 'kontak':
          include 'tampilan/guest/kontak.php';
          break;

        default:
          include 'tampilan/guest/beranda.php';
          break;
      }
    }
    else {
      include 'tampilan/guest/beranda.php';
    }
    ?>
    <?php
    include 'footer.php';
    ?>
  </body>
</html>
