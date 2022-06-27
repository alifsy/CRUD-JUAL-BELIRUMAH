<?php
require_once '../koneksi.php';

$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE `pembeli` SET `nik`='$nik',`nama`='$nama',`no_hp`='$no_hp',`alamat`='$alamat',`tanggal_lahir`='$tanggal_lahir',`email`='$email' WHERE nik";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;