<?php
require_once 'koneksi.php';

$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_kelurahan = $_POST['kelurahan'];
$_proses = $_POST['proses'];

// Simpan data ke array $data
$data = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan];

if($_proses == 'tambah') {
    $sql = "INSERT INTO pasien(kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES
    (?,?,?,?,?,?,?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
}
header('Location: data_pasien.php');