<aside>
  <div class="aside-profile">
    <div class="row center">
      <div class="col s12">
        <img src="assets/img/users/<?php echo $data_user_mapping['foto']; ?>" class="circle" width="80" height="80">
      </div>
    </div>
    <div class="row center">
      <div class="col s12">
        <a href="javascript:void(0)" class="aside-profile-name"><?php echo $data_user_mapping['nama']; ?></a>
      </div>
    </div>
    <div class="row center">
      <div class="col s12">
        <span class="aside-profile-role"><?php echo $data_role_dash['nama']; ?></span>
      </div>
    </div>
  </div>
  <ul>
    <li><a href="dashboard.php?p=karya">Galeri</a></li>
    <li><a href="javascript:void(0)" id="open-submenu">Kategori</a>
      <ul class="none" id="sub-menu">
        <li><a href="dashboard.php?p=karya&m=kategori&id=1">Commercial Photography</a></li>
        <li><a href="dashboard.php?p=karya&m=kategori&id=2">Olahraga</a></li>
        <li><a href="dashboard.php?p=karya&m=kategori&id=3">People</a></li>
      </ul>
    </li>
    <?php
    if ($data_user['role_id']==1) {
    ?>
    <li><a href="dashboard.php?p=kontak" class="<?php if(getUrl('dashboard.php?p=kontak')==true){echo "active"; } ?>">>Kontak</a></li>
    <li><a href="dashboard.php?p=kurator" class="<?php if(getUrl('dashboard.php?p=kurator')==true){echo "active"; } ?>">>Kurator</a></li>
    <li><a href="dashboard.php?p=fotografer" class="<?php if(getUrl('dashboard.php?p=fotografer')==true){echo "active"; } ?>">>Fotografer</a></li>
    <li><a href="dashboard.php?p=kategori" class="<?php if(getUrl('dashboard.php?p=kategori')==true){echo "active"; } ?>">>Kategori</a></li>
    <?php
    }
    elseif ($data_user['role_id']==2) {
    ?>
    <li><a href="dashboard.php?p=profile" class="<?php if(getUrl('dashboard.php?p=profile')==true){echo "active"; } ?>">><?php echo $data_user_mapping['nama'] ?></a></li>
    <?php
    }
    elseif ($data_user['role_id']==3) {
    ?>
    <li><a href="dashboard.php?p=profile" class="<?php if(getUrl('dashboard.php?p=profile')==true){echo "active"; } ?>"><?php echo $data_user_mapping['nama'] ?></a></li>
    <?php
    }
    ?>
    <li><a href="logout.php" class="mobile-menu">Keluar</a></li>
  </ul>
</aside>
