<nav>
  <div class="dashboard-container">
  <div class="left">
    <a href="javascript:void(0)" class="button-collapse">Menu</a>
    <a href="dashboard.php" class="brand-logo"><img src="assets/img/apps/logo.png" alt="" style="margin-top:10px"></a>
  </div>
  <div class="right">
    <ul>
      <!-- <li><a href="dashboard.php?p=karya">Galeri</a></li> -->
      <?php
      if ($data_user['role_id']==1) {
      ?>
      <?php
      }
      elseif ($data_user['role_id']==2) {
      ?>
      <!-- <li><a href="dashboard.php?p=profile"><?php echo $data_user_mapping['nama'] ?></a></li> -->
      <?php
      }
      elseif ($data_user['role_id']==3) {
      ?>
      <!-- <li><a href="dashboard.php?p=profile"><?php echo $data_user_mapping['nama'] ?></a></li> -->
      <?php
      }
      ?>
      <li><a href="logout.php">Keluar</a></li>
    </ul>
  </div>
  </div>
</nav>
