<?php
require_once 'koneksi.php';

$_nama = $_POST['nama'];
$_gender = $_POST['gender'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_kategori = $_POST['kategori'];
$_alamat = $_POST['alamat'];
$_telpon = $_POST['telpon'];
$_unit_kerja = $_POST['unit_kerja'];
$_proses = $_POST['proses'];

// Simpan data ke array $data
$data = [$_nama, $_gender, $_tmp_lahir, $_tgl_lahir, $_kategori, $_alamat, $_telpon, $_unit_kerja];

if($_proses == 'tambah') {
    $sql = "INSERT INTO paramedik(nama, gender, tmp_lahir, tgl_lahir, kategori, alamat, telpon, unit_kerja_id) VALUES
    (?,?,?,?,?,?,?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} elseif ($_proses == 'edit') {
    $id_paramedik = $_POST['id'];
    $data[] = $id_paramedik;
    $sql = "UPDATE paramedik SET nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, kategori=?, alamat=?, telpon=?, unit_kerja_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else {
    $id_paramedik = $_GET['id'];
    $sql = "DELETE FROM paramedik WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id_paramedik]);
}
header('Location: data_paramedik.php');