<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "libur_kecil";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "koneksi databse rusak";
    die("erorr!");
}

echo "koneksi berhasil";
?>