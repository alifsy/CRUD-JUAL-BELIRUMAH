<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//anggota
$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO pembeli (nik, nama, no_hp, alamat, tanggal_lahir, email) VALUES ('$nik', '$nama', '$no_hp', '$alamat', '$tanggal_lahir', '$email')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;