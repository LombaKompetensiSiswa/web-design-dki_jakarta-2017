<nav>
  <div class="guest-container">
  <div class="left">
    <a href="javascript:void(0)" class="button-collapse">Menu</a>
    <a href="index.php" class="brand-logo"><img src="assets/img/apps/logo.png" alt="" style="margin-top:10px"></a>
  </div>
  <div class="right">
    <ul>
      <li><a href="index.php?p=beranda" class="<?php if(getUrl('index.php?p=beranda')==true){echo "active"; } ?>">Beranda</a></li>
      <li><a href="index.php?p=galeri" class="<?php if(getUrl('index.php?p=galeri')==true){echo "active"; } ?>">Galeri</a></li>
      <li><a href="index.php?p=fotografer" class="<?php if(getUrl('index.php?p=fotografer')==true){echo "active"; } ?>">Fotografer</a></li>
      <li><a href="index.php?p=kurator" class="<?php if(getUrl('index.php?p=kurator')==true){echo "active"; } ?>">Kurator</a></li>
      <li><a href="index.php?p=profil" class="<?php if(getUrl('index.php?p=profil')==true){echo "active"; } ?>">Profil</a></li>
      <li><a href="index.php?p=kontak" class="<?php if(getUrl('index.php?p=kontak')==true){echo "active"; } ?>">Kontak</a></li>
      <li><a href="login.php" class="<?php if(getUrl('login.php')==true){echo "active"; } ?>">Masuk</a></li>
    </ul>
  </div>
  </div>
</nav>
