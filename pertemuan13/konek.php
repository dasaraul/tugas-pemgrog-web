<?php
$databaseHost = 'localhost';
$databaseName = 'db_crud';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die ("koneksi gagal wir, back to afterlife");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
