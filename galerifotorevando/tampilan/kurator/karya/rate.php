<?php
$karya = $koneksi->prepare('select *from karya where id = "'.get('id').'"');
$karya->execute();
$data_karya = $karya->fetch(PDO::FETCH_ASSOC);
?>
<script type="text/javascript">
  function tambahDuaLima() {
    var jumlah_awal = parseInt($('input[name=rate]').val());
    if ($('input[name=rate]').val()>=100) {

    }
    else {
      $('input[name=rate]').val(jumlah_awal+=25);
    }
  }
  function kurangDuaLima() {
    var jumlah_awal = parseInt($('input[name=rate]').val());
    if ($('input[name=rate]').val()==0) {

    }
    else {
      $('input[name=rate]').val(jumlah_awal-=25);
    }
  }
</script>
<div class="card-panel">
  <div class="row">
    <div class="col s12">
      <div class="breadcrumb">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="dashboard.php?p=karya">Karya</a></li>
          <li><a href="dashboard.php?p=karya&m=edit&id=<?php echo $data_karya['id']; ?>">Beri Nilai Karya</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h2>Beri Nilai Karya</h2>
    </div>
  </div>
  <form action="proses/kurator/karya/rate.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data_karya['id']; ?>">
    <input type="hidden" name="kurator_id" value="<?php echo $data_user_mapping['id']; ?>">
    <div class="row">
      <div class="col s10">
        <input type="text" name="rate" readonly value="0" class="input">
      </div>
      <div class="col s2">
        <a href="javascript:void(0)" onclick="tambahDuaLima()" class="btn">Tambah</a>
        <a href="javascript:void(0)" onclick="kurangDuaLima()" class="btn red">Kurang</a>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <a href="dashboard.php?p=karya" class="btn red">Kembali</a>
        <button type="submit" class="btn">Simpan</button>
      </div>
    </div>
  </form>
</div>
