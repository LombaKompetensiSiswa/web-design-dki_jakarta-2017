<section class="grey">
  <div class="guest-container">
  <div class="row center">
    <div class="col s12">
      <h2 class="blue-text">Kontak</h2>
    </div>
  </div>
    <div class="row">
      <div class="card-panel">
        <?php
        if (isset($_SESSION['kontak_sukses'])) {
        ?>
        <div class="row">
          <div class="col s12">
            <div class="card-panel blue white-text">
              <?php echo $_SESSION['kontak_msg']; unset($_SESSION['kontak_sukses']); ?>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
        <form action="proses/guest/kontak/save.php" method="post">
          <div class="row">
            <div class="col s12">
              <input type="text" name="nama" placeholder="Nama" class="input" required>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <input type="text" name="judul_pesan" placeholder="Judul Pesan" class="input" required>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <textarea name="isi_pesan" placeholder="Isi Pesan" class="input" required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <button type="submit" class="btn round btn-full">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
