<?php
$var1 = $_GET['var1'];
$var2 = $_GET['var2'];
$jum = $var1 + $var2;

$data = [
    'var1' => $var1,
    'var2' => $var2,
    'hasil' => $jum
];

header('Content-Type: application/json');
echo json_encode($data);
?>