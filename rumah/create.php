<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//buku
$id = isset($_POST['id']) ? $_POST['id'] : '';
$tipe_rumah = isset($_POST['tipe_rumah']) ? $_POST['tipe_rumah'] : '';
$harga_rumah = isset($_POST['harga_rumah']) ? $_POST['harga_rumah'] : '';
$jenis_rumah = isset($_POST['jenis_rumah']) ? $_POST['jenis_rumah'] : '';
$alamat_rumah = isset($_POST['alamat_rumah']) ? $_POST['alamat_rumah'] : '';
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO rumah (id, tipe_rumah, harga_rumah, jenis_rumah, alamat_rumah, deskripsi) VALUES ('$id', '$tipe_rumah', '$harga_rumah', '$jenis_rumah', '$alamat_rumah', '$deskripsi')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;