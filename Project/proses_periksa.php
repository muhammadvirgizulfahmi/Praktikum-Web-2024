<?php
require_once 'koneksi.php';

$_tanggal = $_POST['tanggal'];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];
$_tensi = $_POST['tensi'];
$_keterangan = $_POST['keterangan'];
$_pasien = $_POST['pasien'];
$_paramedik = $_POST['paramedik'];
$_proses = $_POST['proses'];

// Simpan data ke array $data
$data = [$_tanggal, $_berat, $_tinggi, $_tensi, $_keterangan, $_pasien, $_paramedik];

if($_proses == 'tambah') {
    $sql = "INSERT INTO periksa(tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES
    (?,?,?,?,?,?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} elseif ($_proses == 'edit') {
    $id_periksa = $_POST['id'];
    $data[] = $id_periksa;
    $sql = "UPDATE periksa SET tanggal=?, berat=?, tinggi=?, tensi=?, keterangan=?, pasien_id=?, dokter_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else {
    $id_periksa = $_GET['id'];
    $sql = "DELETE FROM periksa WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id_periksa]);
}
header('Location: data_periksa.php');