<?php

$host = 'localhost';
$dbname = 'latihanphp';
$user = 'root';
$pass = 'andriawan_24';

$db = mysqli_connect($host, $user, $pass, $dbname);

if( !$db ) {
    die("Gagal terhubung ke database" . mysqli_connect_error());
}

?>