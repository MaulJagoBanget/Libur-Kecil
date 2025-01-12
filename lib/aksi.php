<?php
$aksi = $_GET['aksi'] ?? 'beranda'; // Gunakan 'beranda' sebagai default jika 'aksi' tidak ada

switch ($aksi) {
    case 'pesan':
        include 'main/pesan.php';
        break;
    case 'detail':
        include 'main/detail.php';
        break;
    case 'daftar':
        include 'main/daftar.php';
        break;
    case 'hapus':
        include 'main/hapus.php';

    default:
        include 'main/beranda.php';
        break;
}
