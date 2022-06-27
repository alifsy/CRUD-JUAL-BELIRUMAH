<?php
require_once '../koneksi.php';

$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
$id_rumah = isset($_POST['id_rumah']) ? $_POST['id_rumah'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$tipe_rumah = isset($_POST['tipe_rumah']) ? $_POST['tipe_rumah'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE `transaksi` SET `nik`='$nik',`id_rumah`='$id_rumah',`harga`='$harga',`tgl_transaksi`= default,`tipe_rumah`='$tipe_rumah' WHERE id_transaksi";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;