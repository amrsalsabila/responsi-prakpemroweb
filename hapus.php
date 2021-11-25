<?php
include "koneksi.php";
$kode_barang = $_GET['kode_barang'];

$query = mysqli_query($konek,"delete from inventaris where kode_barang='$kode_barang'");

if($query)
{
    header("location:inventaris.php");
}
else
{
    echo "Data gagal dihapus!";
}
?>