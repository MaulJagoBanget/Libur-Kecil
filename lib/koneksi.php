<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "libur_kecil";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>