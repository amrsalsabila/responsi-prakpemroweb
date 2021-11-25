<?php
	session_start();
	$username=$_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("location:index.php?pesan=belum_login");
	}
		include "koneksi.php";
		$kode_barang =$_POST['kode_barang'];
		$nama_barang =$_POST['nama_barang'];
		$jumlah =$_POST['jumlah'];
		$satuan =$_POST['satuan'];
        $tgl_datang =$_POST['tgl_datang'];
        $kategori =$_POST['kategori'];
        $status_barang =$_POST['status_barang'];
        $harga =$_POST['harga'];
        $query=mysqli_query($konek, "insert into inventaris values ('$kode_barang','$nama_barang','$jumlah',
        '$satuan', '$tgl_datang', '$kategori', '$status_barang', '$harga')") or die(mysqli_error($konek));
	if($query)
    {
		echo "<class='responsive'>";
    }
	else
   	{
	echo "<class='responsive'>";
	}
	if($query)
	{
    header("location:inventaris.php?pesan=Berhasil_Tambah_Data");	}
	else
	{
	echo "Proses input gagal";
	}
					?>