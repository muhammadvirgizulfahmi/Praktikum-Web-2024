<?php
require_once 'koneksi.php';
require_once 'navbar.html';
require_once 'sidebar.html';
$query = "SELECT  * FROM unit_kerja";
$unit_kerjas = $dbh->query($query);
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
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="M" required="required"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="F" required="required"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
      <select id="kategori" name="kategori" class="custom-select" required="required">
        <option value="Umum">Umum</option>
        <option value="Spesialis">Spesialis</option>
        <option value="Bidan">Bidan</option>
        <option value="Dokter Gigi">Dokter Gigi</option>
        <option value="Anestesi">Anestesi</option>
        <option value="Bedah">Bedah</option>
        <option value="Ginekolog">Ginekolog</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Telpon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required="required"></textarea>
    </div>
  </div>
  <div class="form-group row">
  <label for="kelurahan" class="col-4 col-form-label">Unit Kerja</label> 
    <div class="col-8">
      <select id="unit_kerja" name="unit_kerja" class="custom-select" required="required">
        <?php foreach($unit_kerjas as $unit_kerja){?>
          <option value="<?= $unit_kerja['id'];?>"><?= $unit_kerja['nama'];?></option>
        <?php };?>
      </select>
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