<?php
$aksi = $_GET['aksi'] ?? 'beranda'; // Gunakan 'beranda' sebagai default jika 'aksi' tidak ada

switch ($aksi) {
    case 'pesan':
        include 'main/pesan.php';
        break;
    case 'daftar':
        include 'main/detail.php';
        break;

    default:
        include 'main/beranda.php';
        break;
}
?>