<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Masuk - Galeri Fotografi</title>
    <link rel="stylesheet" href="assets/css/main.css?time=<?php echo time(); ?>">
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
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
  <body class="grey">
    <?php
    include 'nav.php';
    ?>
    <div class="login-container">
      <div class="row">
        <div class="col s12">
          <div class="card-panel">
            <form action="proses/users/login.php" method="post">
              <div class="row">
                <div class="col s12">
                  <div class="login-circle">
                    <div style="font-size:70px; padding-top:15px; color:#fff; text-align:center">
                      GF
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <input type="text" name="username" placeholder="Username" class="input">
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <input type="password" name="password" placeholder="Password" class="input">
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <button type="submit" class="btn round btn-full">Masuk</button>
                </div>
              </div>
                    <?php
                    if (isset($_SESSION['login_error'])) {
                    ?>
                    <div class="row">
                      <div class="col s12">
                        <div class="card-panel red white-text">
                      <?php echo $_SESSION['login_msg']; unset($_SESSION['login_error']) ?>
                        </div>
                      </div>
                    </div>
                    <?php
                    }
                    ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>
  </body>
</html>
