<?php
require_once 'koneksi.php';
require_once 'navbar.html';
require_once 'sidebar.html';
$id_pasien = $_GET['id'];
if($id_pasien){
    $query = "SELECT * FROM pasien WHERE id=?";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$id_pasien]);
    $pasien = $stmt->fetch();
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content"></section>
<div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Form Pasien</h3>
                            <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

<div class = "container">
  <form method="POST" action="proses_pasien.php" class="m-4">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control" required="required" value="<?= $pasien['kode']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $pasien['nama']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $pasien['tmp_lahir']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $pasien['tgl_lahir']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="M" required="required" <?= ($pasien['gender'] == 'M' ? 'checked' : ''); ?>> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="F" required="required" <?= ($pasien['gender'] == 'F' ? 'checked' : ''); ?>> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" required="required" value="<?= $pasien['email']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required="required"><?= $pasien['alamat']; ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label> 
    <div class="col-8">
      <select id="kelurahan" name="kelurahan" class="custom-select" required="required">
        <?php
          $query_kelurahan = "SELECT * FROM kelurahan";
          $result_query_kelurahan = $dbh->query($query_kelurahan);
          foreach($result_query_kelurahan as $kelurahan){
            $selected = ($kelurahan['id'] == $pasien['kelurahan_id']) ? 'selected' : '';
        ?>
        <option value="<?= $kelurahan['id'] ?>" <?= $selected ?>><?= $kelurahan['nama']; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <?php if($id_pasien){ ?>
      <input type="hidden" name="id" value="<?= $id_pasien; ?>">
    <?php } ?>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary" value="edit">Update Data</button>
    </div>
  </div>
                          <!-- /.card-body -->
                          </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
</form>
</body>
</html>

<?php
require_once 'footer.html';
?>