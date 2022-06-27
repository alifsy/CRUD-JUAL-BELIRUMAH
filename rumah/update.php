<?php
require_once '../koneksi.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$tipe_rumah = isset($_POST['tipe_rumah']) ? $_POST['tipe_rumah'] : '';
$harga_rumah = isset($_POST['harga_rumah']) ? $_POST['harga_rumah'] : '';
$jenis_rumah = isset($_POST['jenis_rumah']) ? $_POST['jenis_rumah'] : '';
$alamat_rumah = isset($_POST['alamat_rumah']) ? $_POST['alamat_rumah'] : '';
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE rumah SET tipe_rumah = '$tipe_rumah', harga_rumah = '$harga_rumah',jenis_rumah = '$jenis_rumah', alamat_rumah = '$alamat_rumah', deskripsi = '$deskripsi' WHERE `id`= '$id'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;