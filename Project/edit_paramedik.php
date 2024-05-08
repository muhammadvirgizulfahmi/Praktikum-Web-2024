<?php
require_once 'koneksi.php';
require_once 'navbar.html';
require_once 'sidebar.html';
$id_paramedik = $_GET['id'];
if($id_paramedik){
    $query = "SELECT * FROM paramedik WHERE id=?";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$id_paramedik]);
    $paramedik = $stmt->fetch();
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
                        <h3 class="card-title">Form Paramedik</h3>
                            <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
<div class = "container">
  <form method="POST" action="proses_paramedik.php" class="m-4">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $paramedik['nama']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="M" required="required" <?= ($paramedik['gender'] == 'M' ? 'checked' : ''); ?>> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="F" required="required" <?= ($paramedik['gender'] == 'F' ? 'checked' : ''); ?>> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $paramedik['tmp_lahir']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $paramedik['tgl_lahir']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
      <select id="kategori" name="kategori" class="custom-select" required="required" <?= $paramedik['kategori']; ?>>
        <option value="Umum" <?= ($paramedik['kategori'] == 'Umum' ? 'selected' : ''); ?>>Umum</option>
        <option value="Spesialis" <?= ($paramedik['kategori'] == 'Spesialis' ? 'selected' : ''); ?>>Spesialis</option>
        <option value="Bidan" <?= ($paramedik['kategori'] == 'Bidan' ? 'selected' : ''); ?>>Bidan</option>
        <option value="Dokter Gigi" <?= ($paramedik['kategori'] == 'Dokter Gigi' ? 'selected' : ''); ?>>Dokter Gigi</option>
        <option value="Anestesi" <?= ($paramedik['kategori'] == 'Anestesi' ? 'selected' : ''); ?>>Anestesi</option>
        <option value="Bedah" <?= ($paramedik['kategori'] == 'Bedah' ? 'selected' : ''); ?>>Bedah</option>
        <option value="Ginekolog" <?= ($paramedik['kategori'] == 'Ginekolog' ? 'selected' : ''); ?>>Ginekolog</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="telpon" class="col-4 col-form-label">Telpon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" type="number" class="form-control" required="required" value="<?= $paramedik['telpon']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required="required"><?= $paramedik['alamat']; ?></textarea>
    </div>
  </div>
  <div class="form-group row">
  <label for="unit_kerja" class="col-4 col-form-label">Unit Kerja</label> 
    <div class="col-8">
      <select id="unit_kerja" name="unit_kerja" class="custom-select" required="required">
        <?php
          $query_unit_kerja = "SELECT * FROM unit_kerja";
          $result_query_unit_kerja = $dbh->query($query_unit_kerja);
          foreach($result_query_unit_kerja as $unit_kerja){
            $selected = ($unit_kerja['id'] == $paramedik['unit_kerja_id']) ? 'selected' : '';
        ?>
        <option value="<?= $unit_kerja['id'] ?>" <?= $selected ?>><?= $unit_kerja['nama']; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <?php if($id_paramedik){ ?>
      <input type="hidden" name="id" value="<?= $id_paramedik; ?>">
    <?php } ?>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary" value="edit">Update Data</button>
    </div>
  </div>
</div>
</form>
</div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.html';
?>