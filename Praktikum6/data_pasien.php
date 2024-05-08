<?php
// Sisipkan file koneksi
require_once('koneksi.php');

// Buat query untuk mengambil semua data
$query = "SELECT * FROM pasien";

// Eksekusi query dengan PDO
$pasiens = $dbh->query($query);
?>

<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>List Data Pasien</h1>
    <a href="create.php" class="btn btn-primary m-2">Tambah Data Pasien</a>
    <table class="table">
        <tr class="table-info">
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tempah lahir</th>
            <th>Tgl lahir</th>
            <th>JK</th>
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
                <td><?= $pasien['kelurahan_id'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $pasien['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="proses.php?id=<?= $pasien['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
require_once 'footer.html';
?>



<?php
class User{
    static $counter = 0;
    public $fullname;
    protected $username;
    private $password;

    function __construct ($_fullname, $_username, $_password) {
        $this->fullname = $_fullname;
        $this->username = $_username;
        $this->password = $_password;
        self::$counter++;
    }
    public function login($_username, $_password) {
        if($this->username == $_username && $this->password == $_password){
            echo "Login Berhasil";
        }else {
            echo "Login gagal";
        }
    }
}