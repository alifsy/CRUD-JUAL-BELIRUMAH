<?php
$dbserver = 'localhost';
$dbname = 'uas_pweb';
$dbuser = 'root';
$dbpassword = '';
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try{
    $connection = new pdo ($dsn, $dbuser, $dbpassword);

} catch (exception $exception) {
    die ("Terjadi Error:".$exception->getMessage());

}
