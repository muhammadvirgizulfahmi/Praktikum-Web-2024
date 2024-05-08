<?php
// sisipkan file koneksi
require_once 'koneksi.php';

// buat query untuk get all data
$query = 'SELECT paramedik.*, unit_kerja.nama as nama_unit_kerja FROM paramedik JOIN unit_kerja ON paramedik.unit_kerja_id = unit_kerja.id ORDER BY paramedik.id';
//eksekusi query dengan PDO
$paramediks = $dbh->query($query);

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
                        <h3 class="card-title">Data Paramedik</h3>
                            <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="create_paramedik.php" class= "btn btn-primary mb-1"> Tambah Data Paramedik</a>
    <table class="table">
        <tr class="table">
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Gender</th>
            <th>Telpon</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Unit Kerja</th>
            <th>Aksi</th>
        </tr>
        
        <?php 
        $no = 1;
        foreach($paramediks as $paramedik): 
        ?>
            <tr>
                <td><?= $no ++ ?></td>
                <td><?= $paramedik['nama'] ?></td>
                <td><?= $paramedik['kategori'] ?></td>
                <td><?= $paramedik['gender'] ?></td>
                <td><?= $paramedik['telpon'] ?></td>
                <td><?= $paramedik['tmp_lahir'] ?></td>
                <td><?= $paramedik['tgl_lahir'] ?></td>
                <td><?= $paramedik['alamat'] ?></td>
                <td><?= $paramedik['nama_unit_kerja'] ?></td>
                <td>
                    <a href="edit_paramedik.php?id=<?= $paramedik['id']; ?>"> <button class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="proses_paramedik.php?id=<?= $paramedik['id']; ?>"> <button class="btn btn-danger btn-sm">Delete</button></a>
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