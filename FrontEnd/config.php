<?php
$databaseHost = 'localhost';
$databaseName = 'aplikasi';
$databaseUsername = 'root';
$databasePasword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePasword, $databaseName);

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
?>