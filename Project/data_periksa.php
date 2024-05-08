<?php
// sisipkan file koneksi
require_once 'koneksi.php';

// buat query untuk get all data
$query = 'SELECT periksa.*, pasien.nama as pasien, pasien.kode as kode_pasien, paramedik.nama as paramedik FROM periksa JOIN pasien ON periksa.pasien_id = pasien.id JOIN paramedik ON periksa.dokter_id = paramedik.id ORDER BY periksa.id';
//eksekusi query dengan PDO
$periksas = $dbh->query($query);

?>

<?php
require_once 'navbar.html';
require_once 'sidebar.html';
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
                        <h3 class="card-title">Data Periksa</h3>
                            <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="create_periksa.php" class= "btn btn-primary mb-1"> Tambah Data Periksa</a>
    <table class="table">
        <tr class="table">
            <th>No</th>
            <th>Tanggal</th>
            <th>Berat(kg)</th>
            <th>Tinggi(cm)</th>
            <th>Tensi</th>
            <th>Keterangan</th>
            <th>Pasien</th>
            <th>Paramedik</th>
            <th>Aksi</th>
        </tr>
        
        <?php 
        $no = 1;
        foreach($periksas as $periksa): 
        ?>
            <tr>
                <td><?= $no ++ ?></td>
                <td><?= $periksa['tanggal'] ?></td>
                <td><?= $periksa['berat'] ?></td>
                <td><?= $periksa['tinggi'] ?></td>
                <td><?= $periksa['tensi'] ?></td>
                <td><?= $periksa['keterangan'] ?></td>
                <td><?= $periksa['pasien']. ' - ' .$periksa['kode_pasien']; ?></td>
                <td><?= $periksa['paramedik'] ?></td>
                <td>
                    <a href="edit_periksa.php?id=<?= $periksa['id']; ?>"> <button class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="proses_periksa.php?id=<?= $periksa['id']; ?>"> <button class="btn btn-danger btn-sm">Delete</button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
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