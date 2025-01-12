<?php
include 'lib/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan' and is_deleted=0";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $sql_hapus = "DELETE FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'";
    $query_hapus = mysqli_query($db,$sql_hapus);
    //var_dump($sql_hapus); exit;
    if($query_hapus)
    {
        header('Location: index.php?aksi=daftar');
    }else{
        header('Location: index.php?aksi=detail&id_pemesanan='.$id_pemesanan);
    }
}