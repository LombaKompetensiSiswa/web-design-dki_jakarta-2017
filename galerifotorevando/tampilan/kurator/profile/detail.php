<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=profile">Profile</a></li>
          <li><a href="dashboard.php?p=profile&m=detail">Detail Profile</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2><?php echo $data_user_mapping['nama']; ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col s3">
      <img src="assets/img/users/<?php echo $data_user_mapping['foto']; ?>" class="circle" width="200" height="200">
    </div>
    <div class="col s9">
      <div class="row">
        <div class="col s4">
          Nama
        </div>
        <div class="col s8">
          <?php echo $data_user_mapping['nama']; ?>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          Biodata
        </div>
        <div class="col s8">
          <?php echo $data_user_mapping['biodata']; ?>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          Akses
        </div>
        <div class="col s8">
          <?php echo $data_role_dash['nama']; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <a href="dashboard.php?p=karya" class="btn red">Kembali</a>
      <a href="dashboard.php?p=profile&m=edit" class="btn">Edit Profile</a>
    </div>
  </div>
</div>
