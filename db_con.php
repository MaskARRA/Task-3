<?php session_start();
$pdo=[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => false,
];

$con=  new PDO('mysql:host=localhost;dbname=mydb', 'root', 'password', $pdo)

?>