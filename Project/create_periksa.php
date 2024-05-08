<?php
require_once 'koneksi.php';
require_once 'navbar.html';
require_once 'sidebar.html';
$query = 'SELECT * FROM pasien';
$pasiens = $dbh->query($query);
$query = 'SELECT * FROM paramedik';
$paramediks = $dbh->query($query);
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
                        <h3 class="card-title">Form Periksa</h3>
                            <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
<div class = "container">
  <form method="POST" action="proses_periksa.php" class="m-4">
  <div class="form-group row">
  <label for="pasien" class="col-4 col-form-label">Pasien</label> 
    <div class="col-8">
      <select id="pasien" name="pasien" class="custom-select" required="required">
        <?php foreach($pasiens as $pasien){?>
          <option value="<?= $pasien['id'];?>"><?= $pasien['nama']. ' - ' .$pasien['kode']; ?></option>
        <?php };?>
      </select>
    </div>
  </div>
  <div class="form-group row">
  <label for="paramedik" class="col-4 col-form-label">Paramedik</label> 
    <div class="col-8">
      <select id="paramedik" name="paramedik" class="custom-select" required="required">
        <?php foreach($paramediks as $paramedik){?>
          <option value="<?= $paramedik['id'];?>"><?= $paramedik['nama'] ?></option>
        <?php };?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat (kg)</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi (cm)</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tensi" class="col-4 col-form-label">Tensi</label> 
    <div class="col-8">
      <input id="tensi" name="tensi" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="keterangan" class="col-4 col-form-label">Keterangan</label> 
    <div class="col-8">
      <textarea id="keterangan" name="keterangan" cols="40" rows="5" class="form-control" required="required"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary" value="tambah">Submit</button>
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