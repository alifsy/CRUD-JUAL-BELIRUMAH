<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//buku
$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
$id_rumah = isset($_POST['id_rumah']) ? $_POST['id_rumah'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$tipe_rumah = isset($_POST['tipe_rumah']) ? $_POST['tipe_rumah'] : '';

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `transaksi` (`nik`, `id_rumah`, `harga`, `tgl_transaksi`, `tipe_rumah`) VALUES ('$nik', '$id_rumah', '$harga', default, '$tipe_rumah')";

    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 