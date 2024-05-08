<?php
// sisipkan file koneksi
require_once 'koneksi.php';

// buat query untuk get all data
$query = 'SELECT pasien.*, kelurahan.nama as nama_kelurahan FROM pasien JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id ORDER BY pasien.id';
//eksekusi query dengan PDO
$pasiens = $dbh->query($query);

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
                        <h3 class="card-title">Data Pasien</h3>
                            <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="create_pasien.php" class= "btn btn-primary mb-1"> Tambah Data Pasien</a>
    <table class="table">
        <tr class="table">
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Aksi</th>
        </tr>
        
        <?php 
        $no = 1;
        foreach($pasiens as $pasien): 
        ?>
            <tr>
                <td><?= $no ++ ?></td>
                <td><?= $pasien['kode'] ?></td>
                <td><?= $pasien['nama'] ?></td>
                <td><?= $pasien['email'] ?></td>
                <td><?= $pasien['tmp_lahir'] ?></td>
                <td><?= $pasien['tgl_lahir'] ?></td>
                <td><?= $pasien['gender'] ?></td>
                <td><?= $pasien['alamat'] ?></td>
                <td><?= $pasien['nama_kelurahan'] ?></td>
                <td>
                    <a href="edit_pasien.php?id=<?= $pasien['id']; ?>"> <button class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="proses_pasien.php?id=<?= $pasien['id']; ?>"> <button class="btn btn-danger btn-sm">Delete</button></a>
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